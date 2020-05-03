<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Auth::routes();

// Admin Routes

Route::get('/admin/assign/{id}', 'AdminController@assignTutor')->middleware('admin');

Route::get('/admin/unassign/{id}', 'AdminController@unassignTutor')->middleware('admin');

// Admin/Tutors

Route::get('/admin/tutor/create', 'AdminController@createTutor')->middleware('admin');

// STORE TUTOR???????

Route::post('/admin/tutor', 'AdminController@storeTutor')->middleware('admin');

Route::get('/admin/tutors', 'AdminController@viewTutors')->middleware('admin');

Route::get('/admin/tutors/{id}/edit', 'AdminController@editTutor')->middleware('admin');

Route::put('/admin/tutors/{id}', 'AdminController@updateTutor')->middleware('admin');

Route::delete('/admin/tutors/{id}', 'AdminController@deleteTutor')->middleware('admin');

// Admin/Students

Route::get('/admin/students', 'AdminController@viewStudents')->middleware('admin');

// Admin/Courses
// Route::put('/admin/courses/{id}', 'CourseController@update');

Route::resource('/admin/courses', 'CourseController')->middleware('admin');

Route::resource('admin', 'AdminController')->middleware('admin');

// Tutor Routes

Route::get('/tutor/suspend/{id}', 'TutorController@suspendStudent')->middleware('tutor');

Route::get('/tutor/unsuspend/{id}', 'TutorController@unsuspendStudent')->middleware('tutor');

Route::post('/tutor/submissions/save/{id}', 'SubmissionController@saveGrade')->middleware('tutor');


// Route::get('tutor/assignment', 'AssignmentController@create');

// Tutor Assignment

Route::get('/tutor/students', 'TutorController@viewStudents')->middleware('tutor');

Route::resource('tutor/assignments', 'AssignmentController')->middleware('tutor');

Route::resource('tutor', 'TutorController')->middleware('tutor');

// Tutor Submissions 
Route::get('/tutor/submissions/{id}', 'TutorController@viewSubmissions')->middleware('tutor');

Route::get('/tutor/submissions/edit/{id}', 'SubmissionController@editGrade')->middleware('tutor');

Route::get('/tutor/submissions/download/{id}', 'SubmissionController@downloadSubmission');

// Student Routes

Route::get('student/assignments/{id}', 'StudentController@viewAssignment')->middleware('student');

Route::get('student/assignments', 'StudentController@viewAssignments')->middleware('student');

// Route::post('student/submissions', 'SubmissionController@store');
Route::post('student/submissions/{id}', 'SubmissionController@store');

Route::get('student/course', 'StudentController@viewCourse');

Route::get('student/payments', 'PaymentController@paymentHistory');

Route::get('student/submissions/create/{id}', 'SubmissionController@create')->middleware('student');

Route::get('student/submissions', 'StudentController@viewSubmissions')->middleware('student');

Route::resource('student', 'StudentController')->middleware('student');

// Views Controller

Route::get('central_dashboard', 'DashboardController@index');

Route::resource('programs', 'ProgramController');

Route::get('web-dev', 'ProgramsController@webDev');

Route::get('mobile-dev', 'ProgramsController@mobileDev');

Route::get('data-science', 'ProgramsController@dataScience');

Route::get('product-design', 'ProgramsController@productDesign');

// Payment route



// Paystack

Route::get('/payment/callback/', 'PaymentController@handleGatewayCallback');

Route::get('/payment/{id}', 'PaymentController@getPage');

Route::get('/payment/{id}/balance', 'PaymentController@balancePage');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

// Downloads

Route::get('/download/1', 'FileController@downloadFront');

Route::get('/download/2', 'FileController@downloadBack');

Route::get('/download/3', 'FileController@downloadFull');

Route::get('/download/4', 'FileController@downloadMobile');

Route::get('/download/5', 'FileController@downloadData');

Route::get('/download/6', 'FileController@downloadUI_UX');
