<?php

use Illuminate\Support\Facades\Route;

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


//Admin
Route::get('/','AdminController@login');
Route::get('/login','AdminController@login');
Route::get('/dashboard', 'AdminController@dashboard');
//Login and logout admin
Route::get('/logout-admin', 'AdminController@logout_admin');
Route::post('/login-admin', 'AdminController@login_admin');
//Quản lý điểm
Route::get('/add-point','PointController@add_point');
Route::get('/score-list','PointController@score_list');
Route::get('/edit-score/{student_id}','PointController@edit_score');

Route::post('/search','PointController@search');
Route::post('/save-point','PointController@save_point');
Route::post('/update-point/{student_id}','PointController@update_point');
//Quản lý Sinh viên
Route::get('/add-student','StudentController@add_student');
Route::get('/student-list','StudentController@student_list');
Route::get('/edit-student/{student_id}','StudentController@edit_student');

Route::post('/save-student','StudentController@save_student');
Route::post('/update-student/{student_id}','StudentController@update_student');
//Quản lý Giảng Viên
Route::get('/add-lecturers','TeacherController@add_lecturers');
Route::get('/lecturers-list','TeacherController@lecturers_list');
Route::get('/edit-lecturers/{lecturers_id}','TeacherController@edit_lecturers');
Route::get('/delete-lecturers/{lecturers_id}','TeacherController@delete_lecturers');

Route::post('/save-lecturers','TeacherController@save_lecturers');
Route::post('/update-lecturers/{lecturers_id}','TeacherController@update_lecturers');

//Quản lý Ngành Học
Route::get('/add-major','MajorController@add_major');
Route::get('/major-list','MajorController@major_list');
Route::get('/edit-major/{major_id}','MajorController@edit_major');
Route::get('/delete-major/{major_id}','MajorController@delete_major');

Route::post('/save-major','MajorController@save_major');
Route::post('/update-major/{major_id}','MajorController@update_major');

//Quản lý Lớp Học
Route::get('/add-class','ClassController@add_class');
Route::get('/class-list','ClassController@class_list');
Route::get('/edit-class/{class_id}','ClassController@edit_class');
Route::get('/delete-class/{class_id}','ClassController@delete_class');

Route::post('/save-class','ClassController@save_class');
Route::post('/update-class/{class_id}','ClassController@update_class');

//Quản lý Môn Học
Route::get('/add-subject','SubjectController@add_subject');
Route::get('/subject-list','SubjectController@subject_list');
Route::get('/edit-subject/{subject_id}','SubjectController@edit_subject');
Route::get('/delete-subject/{subject_id}','SubjectController@delete_subject');

Route::post('/save-subject','SubjectController@save_subject');
Route::post('/update-subject/{subject_id}','SubjectController@update_subject');

//Quản lý Khóa
Route::get('/add-course','CourseController@add_course');
Route::get('/course-list','CourseController@course_list');
Route::get('/edit-course/{course_id}','CourseController@edit_course');
Route::get('/delete-course/{course_id}','CourseController@delete_course');

Route::post('/save-course','CourseController@save_course');
Route::post('/update-course/{course_id}','CourseController@update_course');