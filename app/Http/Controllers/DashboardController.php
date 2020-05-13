<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assignment;
use App\Payment;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        // Student Dashboard
        if ($user->privilege_id == '1') {

            if (count($user->courses()->get()) == 0) {

                return view('student.dashboard');

                // Working!!!
            } else if (count($user->courses()->get()) > 0) {

                $user_course = $user->courses()->first()->name;

                $assignments = Assignment::where('course', $user_course)->get();

                $payments = Payment::where('user_id', $user->id)->get();

                $data = [
                    'course' => $user_course,
                    'assignments' => $assignments,
                    'payments' => $payments
                ];

                return view('student.course.dashboard', $data);
            }
            // Tutor Dashboard
        } else if ($user->privilege_id == '2') {

            $tutor_course = $user->courses()->get()->first()->name;

            $assignments = Assignment::where('course', $tutor_course)->get();

            $students = User::where('privilege_id', 1)->get();

            $data = [
                'students' => $students,
                'assignments' => $assignments
            ];

            return view('tutor.dashboard', $data);

            // Admin Dashboard
        } else if (auth()->user()->privilege_id == '3') {
            $users = User::all();

            $data = [
                'users' => $users
            ];

            return view('admin.dashboard', $data);
        }

        // return view('auth.register');
    }
}
