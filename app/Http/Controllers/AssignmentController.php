<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Courses;
use App\Assignment;
use App\User;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutor = auth()->user()->courses()->first()->name;

        $assignments = Assignment::where('course', $tutor)->get();

        $data = [
            'assignments' => $assignments
        ];

        return view('tutor.assignment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Auth::user()->courses()->get();


        return view('tutor.assignment.create')->with('courses', $courses);
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
            'title' => 'required',
            'content' => 'required'
        ]);
        // $assignments = Assignment::all();
        $assignment = new Assignment;
        // $courses = request()->get('course');

        $course = $request->get('course');
        $tutor->courses()->attach($course);

        $assignment->title = $request['title'];
        // $assignment->content = $request->file('assignment')->store('upload');
        $assignment->course = $request['course'];
        $assignment->content = $request['content'];
        $assignment->save();



        return redirect('/tutor/assignments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);

        $data = [
            'assignment' => $assignment
        ];

        return view('tutor.assignment.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignment = Assignment::where('id', $id)->first();
        $courses = Auth::user()->courses()->get();

        $data = [
            'assignment' => $assignment,
            'courses' => $courses
        ];

        return view('tutor.assignment.edit', $data);
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
        $assignment = Assignment::find($id);

        $assignment->title = $request['title'];
        $assignment->content = $request['content'];
        $assignment->course = $request['course'];
        $assignment->save();

        return redirect('/tutor/assignments');
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
}
