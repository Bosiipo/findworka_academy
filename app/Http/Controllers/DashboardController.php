<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        if (auth()->user()->privilege_id == '1') {

            // $students = User::where('privilege_id', 1)->get();

            // $data = [
            //     'students' => $students
            // ];

            return view('student.dashboard');
        } else if (auth()->user()->privilege_id == '2') {

            $students = User::where('privilege_id', 1)->get();

            $data = [
                'students' => $students
            ];
            return view('tutor.dashboard', $data);
        } else if (auth()->user()->privilege_id == '3') {

            // $admins = User::where('privilege_id', 3)->get();
            // $tutors = User::where('privilege_id', 2)->get();
            // $students = User::where('privilege_id', 1)->get();

            $users = User::all();

            $data = [
                'users' => $users
                // 'tutors' => $tutors,
                // 'students' => $students,
            ];

            return view('admin.dashboard', $data);
        }
    }
}
