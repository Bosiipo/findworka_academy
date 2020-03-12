<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::all();

        $data = [
            'courses' => $courses
        ];

        return view('admin.course.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Courses::all();

        $data = [
            'courses' => $courses
        ];

        return view('admin.course.create', $data);
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
            'description' => 'required',
            'content' => 'required',
            'price' => 'required',
        ]);

        $course = new Courses;
        // $courses = Courses::all();

        $course->name = $request['name'];
        $course->description = $request['description'];
        $course->content = $request['content'];
        $course->price = $request['price'];
        $course->program_id = 5;
        $course->save();

        return redirect('/admin/courses');
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
        $course = Courses::where('id', $id)->first();

        $data = [
            'course' => $course
        ];

        return view('admin.course.edit', $data);
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

        $course = Courses::find($id);


        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'price' => 'required',
        ]);

        $course->name = $request['name'];
        $course->description = $request['description'];
        $course->content = $request['content'];
        $course->price = $request['price'];
        $course->save();

        return redirect('/admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Courses::find($id);

        $course->delete();

        return redirect('/admin/courses');
    }
}
