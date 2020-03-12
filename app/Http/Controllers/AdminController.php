<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Courses;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();


        $data = [
            'users' => $users,
        ];

        return view('admin.dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = \Hash::make($request['password']);
        $user->privilege_id = 3;

        $user->save();

        return redirect('/central_dashboard');
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

    public function adminAssignTutorPage()
    {

        $students = User::where('privilege_id', 1)->get();

        $data = [
            'students' => $students
        ];

        return view('admin.tutor.assignTutor', $data);
    }

    public function assignTutor($id)
    {

        $user = User::find($id);
        // $students = User::all();

        $user->privilege_id = 2;

        $user->save();

        $data = [
            'user' => $user
        ];

        return redirect('/admin');
        // return view('admin.dashboard', $data);
    }

    public function unassignTutor($id)
    {
        $user = User::find($id);

        $user->privilege_id = 1;

        $user->save();

        $data = [
            'user' => $user
        ];

        return redirect('/admin');
    }

    public function viewTutors()
    {

        $tutors = User::where('privilege_id', 2)->get();
        $courses = Courses::all();

        $data = [
            'tutors' => $tutors,
            'courses' => $courses
        ];

        return view('admin.tutor.viewTutors', $data);
    }

    public function viewStudents()
    {

        $students = User::where('privilege_id', 1)->get();

        $data = [
            'students' => $students
        ];

        return view('admin.tutor.viewStudents', $data);
    }


    public function createTutor()
    {
        $courses = Courses::all();

        $data = [
            'courses' => $courses
        ];

        return view('admin.tutor.create', $data);
    }

    public function editTutor($id)
    {
        $tutor = User::where('id', $id)->first();
        // dd($tutor->courses()->first()['name']);
        $tutor_course = $tutor->courses()->first()['name'];
        $courses = Courses::all();

        $data = [
            'tutor' => $tutor,
            'courses' => $courses,
            'tutor_course' => $tutor_course
        ];

        return view('admin.tutor.edit', $data);
    }

    public function updateTutor(Request $request, $id)
    {
        $tutor = User::find($id);

        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'course' => 'required'
        ]);

        $tutor->name = $request['name'];
        $tutor->email = $request['email'];
        $tutor->save();

        $course = request()->get('course');

        $tutor->courses()->sync($course);

        return redirect('/admin/tutors');
    }

    public function deleteTutor($id)
    {
        $tutor = User::find($id);

        $tutor->delete();

        return redirect('/admin/tutors');
    }


    // public function storeTutor(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     $tutor = new User;
    //     $courses = Courses::all();

    //     $tutor->name = $request['name'];
    //     $tutor->email = $request['email'];
    //     $tutor->password = \Hash::make($request['password']);
    //     $tutor->privilege_id = 2;
    //     $tutor->save();

    //     $course = $request->get('course');
    //     $tutor->courses()->attach($course);

    //     $students = User::where('privilege_id', '1');

    //     $data = [
    //         'students' => $students,
    //         'courses' => $courses
    //     ];

    //     // return redirect('/central_dashboard');



    //     return redirect('/admin');
    // }
}
