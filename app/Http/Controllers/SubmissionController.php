<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assignment;
use App\Submission;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
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
    public function create($id)
    {

        $user_course = Auth::user()->courses()->first();

        $assignment = Assignment::find($id);

        $data = [
            'assignment' => $assignment
        ];

        return view('student.submission.create', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $id)
    {

        $assignment = Assignment::find($id);
        $file_name = $assignment->file;
        $assignment->done = 'completed';
        $assignment->save();

        $submission = new Submission;
        $path = $request->file('file')->store('assignments');
        $submission->file = $path;
        $submission->title = $request['title'];
        $submission->course_name = $request['course'];
        $submission->assignment_id = $assignment->id;
        $submission->save();
        // dd($submission);
        $user = auth()->user();
        $user->submissions()->attach($submission, ['assignment_id' => $assignment->id, 'status' => true]);

        return redirect('/central_dashboard');
    }

    public function downloadSubmission(Request $request, $id)
    {
        $submission = Submission::find($id);

        $submission->grade = $request->get('grade');

        $file_path = $submission->file;

        return Storage::download($file_path);
    }

    public function saveGrade(Request $request, $id)
    {

        $submission = Submission::find($id);

        $submission->grade = $request->get('grade');
        $submission->save();

        return redirect()->action('TutorController@viewStudents');
    }

    public function editGrade(Request $request, $id)
    {

        $submission = Submission::find($id);

        $data = [
            'submission' => $submission
        ];

        return view('tutor.student.edit_submission', $data);
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
}
