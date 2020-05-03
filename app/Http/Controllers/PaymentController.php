<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;
use App\User;
use App\Courses;
use App\PaymentStatus;

class PaymentController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    // View all payments

    public function payments()
    {
        $payments = Payment::all();

        $data = [
            'payments' => $payments
        ];

        return view('admin.payments', $data);
    }

    public function paymentHistory()
    {
        $user = auth()->user();
        $course_price = $user->courses()->first()->price;
        $course_id = $user->courses()->first()->id;
        $user_id = auth()->user()->id;
        $payments = Payment::where('user_id', $user_id)->get();
        // dd($user->payments()->get()->last()->payment_status_id);

        $data = [
            'user' => $user,
            'payments' => $payments,
            'course_id' => $course_id,
            'course_price' => $course_price
        ];

        return view('student.payment.history', $data);
    }

    public function getPage($id)
    {
        $course = Courses::find($id);
        $user = Auth::user();
        $course_info = array('course_id' => $course->id, 'course_name' => $course->name, 'user_id' => Auth::user()->id);
        $course_details = json_encode($course_info);

        $data = [
            'course_details' => $course_details,
            'course' => $course
        ];

        return view('payment.payment', $data);
    }

    public function balancePage($id)
    {
        $course = Courses::find($id);
        $user = Auth::user();
        $balance = $user->payments()->get()->first()->to_balance;

        $course_info = array('course_id' => $course->id, 'course_name' => $course->name, 'user_id' => Auth::user()->id);
        $course_details = json_encode($course_info);

        $data = [
            'course_details' => $course_details,
            'course' => $course,
            'balance' => $balance
        ];

        return view('payment.balance', $data);
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $req)
    {
        $paymentDetails = Paystack::getPaymentData();

        $user = Auth::user();
        $course_price = Courses::where('id', $paymentDetails['data']['metadata']['course_id'])->get()->first()->price;
        $course_registered = $user->courses()->get();
        $countCourse = count($course_registered);




        if ($paymentDetails['data']['status'] == 'success') {

            if ($countCourse >= 1) {

                $balance = $user->payments()->first()->to_balance;

                if ($balance == $paymentDetails['data']['amount'] / 100) {

                    // Balance payment
                    $payment = new Payment;
                    $payment->transaction_id = $paymentDetails['data']['id'];
                    $payment->user_id = $paymentDetails['data']['metadata']['user_id'];
                    $payment->amount_paid = ($paymentDetails['data']['amount'] / 100);
                    $payment->to_balance = 0;
                    $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
                    $payment->payment_status_id = 2;
                    $payment->save();
                    $course_id = $paymentDetails['data']['metadata']['course_id'];
                    $payment_id = $payment->id;
                    $user->courses()->attach($course_id, ['payment_id' => $payment->id]);
                    $user->payments()->attach($payment_id, ['payment_status_id' => $payment->payment_status_id]);
                    return redirect('/central_dashboard');
                }
            } elseif (($paymentDetails['data']['amount'] / 100) != ($course_price)) {

                // First half payment
                $payment = new Payment;
                $payment->transaction_id = $paymentDetails['data']['id'];
                $payment->user_id = $paymentDetails['data']['metadata']['user_id'];
                $payment->amount_paid = ($paymentDetails['data']['amount'] / 100);
                $payment->to_balance = $course_price - ($paymentDetails['data']['amount'] / 100);
                $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
                $payment->payment_status_id = 1;
                $payment->save();

                $course_id = $paymentDetails['data']['metadata']['course_id'];
                $payment_id = $payment->id;

                $user->courses()->attach($course_id, ['payment_id' => $payment->id]);
                $user->payments()->attach($payment_id, ['payment_status_id' => $payment->payment_status_id]);

                return redirect('/central_dashboard');
            } else {
                // Full payment
                $payment = new Payment;
                $payment->transaction_id = $paymentDetails['data']['id'];
                $payment->user_id = $paymentDetails['data']['metadata']['user_id'];
                $payment->amount_paid = ($paymentDetails['data']['amount'] / 100);
                // if ($course_price == $paymentDetails['data']['amount'] / 100) {
                $payment->to_balance = 0;
                // }
                $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
                $payment->payment_status_id = 2;
                $payment->save();

                $course_id = $paymentDetails['data']['metadata']['course_id'];
                $payment_id = $payment->id;

                $user->courses()->attach($course_id, ['payment_id' => $payment->id]);
                $user->payments()->attach($payment_id, ['payment_status_id' => $payment->payment_status_id]);


                return redirect('/central_dashboard');
            }
        } else {
            return ('Payment Unapproved!');
        }

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
