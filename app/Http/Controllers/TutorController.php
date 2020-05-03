<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Courses;
use App\Assignment;
use DB;
use App\Submission;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tutor = auth()->user()->courses()->first()->name;

        // $assignments = Assignment::where('course', $tutor)->get();
        // dd($assignments);

        // $data = [
        //     'assignments' => $assignments
        // ];

        // return view('tutor.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $courses = Courses::all();

        // $data = [
        //     'courses' => $courses
        // ];

        // return view('tutor.create', $data);
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
            'course' => 'required',
            'password' => 'required',
        ]);

        $tutor = new User;
        $courses = Courses::all();

        $tutor->name = $request['name'];
        $tutor->email = $request['email'];
        $tutor->password = \Hash::make($request['password']);
        $tutor->privilege_id = 2;
        $tutor->save();

        $course = $request->get('course');
        $tutor->courses()->attach($course);

        $students = User::where('privilege_id', '1');

        $data = [
            'students' => $students
        ];

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutor = User::find($id);
        $courses = Auth::user()->courses()->get();

        $data = [
            'tutor' => $tutor,
            'courses' => $courses
        ];

        return view('tutor.edit', $data);
        $tutor = User::where('privilege_id', 1)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = User::find($id);
        $courses = Courses::all();

        $data = [
            'tutor' => $tutor,
            'courses' => $courses
        ];

        return view('tutor.edit', $data);
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

        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $tutor = User::find($id);

        $tutor->name = $request['name'];
        $tutor->email = $request['email'];
        $tutor->password = $request['password'];

        // $data = [
        //     'courses' => $courses
        // ];

        return view('tutor.create', $data);
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

    public function suspendStudent($id)
    {
        $student = User::find($id);

        $student->suspend = 1;

        $student->save();

        $data = [
            'student' => $student
        ];

        return redirect('/tutor');
    }

    public function unsuspendStudent($id)
    {
        $student = User::find($id);

        $student->suspend = 0;

        $student->save();

        $data = [
            'student' => $student
        ];

        return redirect('/tutor');
    }

    public function viewStudents()
    {
        $students = User::where('privilege_id', 1)->paginate(10);

        $tutor = auth()->user()->courses()->get();

        $data = [
            'students' => $students,
            'tutor' => $tutor
        ];

        return view('tutor.student.index', $data);
    }

    public function viewSubmissions($id)
    {
        $student = User::find($id);
        // dd($student->submissions());

        $submissions = $student->submissions()->get();
        // dd($submissions);


        // $tutor = auth()->user()->courses()->get();

        $data = [
            'student' => $student,
            'submissions' => $submissions
        ];

        return view('tutor.student.submissions', $data);
    }

    // public function downloadAssignment($id)
    // {

    //     $submission_file = Submission::find($id)->file;

    //     $pathToFile = public_path('storage/submissions/') . $submission_file;

    //     return response()->download($pathToFile);
    // }
}
