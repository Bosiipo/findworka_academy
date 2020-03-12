<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assignment;
// use App\Programs;
use App\Courses;
use App\Submission;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $student = new User;
        $courses = Courses::all();
        // $programs = Programs::all();

        $data = [
            'courses' => $courses
            // 'programs' => $programs
        ];

        return view('student.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $student = new User;
        $courses = Courses::all();

        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->password = \Hash::make($request['password']);
        $student->privilege_id = 1;
        $student->save();

        $course = $request->get('course');
        $student->courses()->attach($course);

        return redirect('/central_dashboard')->with('success', 'Student Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewAssignments()
    {
        $assignments = Assignment::all();
        $submissions = Submission::all();

        $data = [
            'assignments' => $assignments,
            'submissions' => $submissions
        ];

        return view('student.assignment.index', $data);
    }

    public function viewAssignment($id)
    {
        $assignment = Assignment::find($id);

        $data = [
            'assignment' => $assignment
        ];

        return view('student.assignment.view', $data);
    }
}
