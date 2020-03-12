<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * 
     * @var string
     */
    // protected $redirectTo = '/central_dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function redirectTo()
    {

        if (auth()->user()->privilege_id == '1') {
            $students = User::where('privilege_id', 1)->get();

            $data = [
                'students' => $students
            ];
            return ('/central_dashboard');
        } else if (auth()->user()->privilege_id == '2') {
            return ('/central_dashboard');
        } else if (auth()->user()->privilege_id == '3') {
            return ('/central_dashboard');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['suspend'] = 0;

        return $credentials;
    }

    // if(){

    // } else {
    //     return redirect()->back()->withInput($request->only($this->username()))->with('error', "Unverified account.");
    // }
}
