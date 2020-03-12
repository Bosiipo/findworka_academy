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

Route::get('/admin/assign/{id}', 'AdminController@assignTutor');

Route::get('/admin/unassign/{id}', 'AdminController@unassignTutor');

// Admin/Tutors

Route::get('/admin/tutor/create', 'AdminController@createTutor');

Route::get('/admin/tutors', 'AdminController@viewTutors');

Route::get('/admin/tutors/{id}/edit', 'AdminController@editTutor');

Route::put('/admin/tutors/{id}', 'AdminController@updateTutor');

Route::delete('/admin/tutors/{id}', 'AdminController@deleteTutor');

// Admin/Students

Route::get('/admin/students', 'AdminController@viewStudents');

// Admin/Courses
// Route::put('/admin/courses/{id}', 'CourseController@update');

Route::resource('/admin/courses', 'CourseController');

Route::resource('admin', 'AdminController');

// Tutor Routes

Route::get('/tutor/suspend/{id}', 'TutorController@suspendStudent');

Route::get('/tutor/unsuspend/{id}', 'TutorController@unsuspendStudent');

// Route::get('tutor/assignment', 'AssignmentController@create');

// Tutor Assignment

Route::get('/tutor/students', 'TutorController@viewStudents');

Route::resource('tutor/assignments', 'AssignmentController');

Route::resource('tutor', 'TutorController');

// Student Routes

Route::get('student/assignments/{id}', 'StudentController@viewAssignment');

Route::get('student/assignments', 'StudentController@viewAssignments');

// Route::post('student/submissions/{id}', 'SubmissionController');

Route::resource('student/submissions', 'SubmissionController');

Route::resource('student', 'StudentController');

// Views Controller

Route::get('central_dashboard', 'DashboardController@index');

Route::resource('programs', 'ProgramController');

Route::get('web-dev', 'ProgramsController@webDev');

Route::get('mobile-dev', 'ProgramsController@mobileDev');

Route::get('data-science', 'ProgramsController@dataScience');

Route::get('product-design', 'ProgramsController@productDesign');

// Payment route

Route::get('/payment/front-end', 'PaymentController@front_end');

Route::get('/payment/back-end', 'PaymentController@back_end');

Route::get('/payment/full-stack', 'PaymentController@full_stack');

Route::get('/payment/mobile-dev', 'PaymentController@mobile_dev');

Route::get('/payment/data-science', 'PaymentController@data_science');

Route::get('/payment/product-design', 'PaymentController@product_design');
