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
    return redirect('/careers/index');
});

Route::name('careers.')->prefix('careers')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/index', 'CareerController@index')->name('index');
    Route::get('/{careerId}', 'CareerController@getCareer')->name('get');
    Route::post('/store', 'CareerController@store')->name('store');
    Route::post('/update', 'CareerController@updateCareer')->name('update');
    Route::post('/data', 'CareerController@getCareers');
    Route::post('/destroy', 'CareerController@destroyCareer')->name('destroy');
});

Route::name('groups.')->prefix('groups')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/index', 'GroupController@index')->name('index');
    Route::get('/admin/{groupId}', 'GroupController@adminGroup')->name('get');
    Route::get('/{groupId}', 'GroupController@getGroup')->name('get');
    Route::post('/store', 'GroupController@store')->name('store');
    Route::post('/store/teacher', 'GroupController@storeTeacher')->name('teacher');
    Route::post('/store/student', 'GroupController@storeStudent')->name('student');
    Route::post('/update', 'GroupController@updateGroup')->name('update');
    Route::post('/data', 'GroupController@getGroups');
    Route::post('/teachers/data/{groupId}', 'GroupController@getTeachersByGroup');
    Route::post('/students/data/{groupId}', 'GroupController@getStudentsByGroup');
    Route::post('/destroy', 'GroupController@destroyGroup')->name('destroy');
    Route::post('/destroy/student', 'GroupController@destroyStudentGroup')->name('destroy');
    Route::post('/destroy/teacher', 'GroupController@destroyTeacherGroup')->name('destroy');
});

Route::name('students.')->prefix('students')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/index', 'StudentController@index')->name('index');
    Route::get('/{studentId}', 'StudentController@getStudent')->name('get');
    Route::post('/store', 'StudentController@store')->name('store');
    Route::post('/update', 'StudentController@updateStudent')->name('update');
    Route::post('/data', 'StudentController@getStudents');
    Route::post('/destroy', 'StudentController@destroyStudent')->name('destroy');
});

Route::name('teachers.')->prefix('teachers')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/index', 'TeacherController@index')->name('index');
    Route::get('/{teacherId}', 'TeacherController@getTeacher')->name('get');
    Route::post('/store', 'TeacherController@store')->name('store');
    Route::post('/update', 'TeacherController@updateTeacher')->name('update');
    Route::post('/data', 'TeacherController@getTeachers');
    Route::post('/destroy', 'TeacherController@destroyTeacher')->name('destroy');
});

Route::name('forms.')->prefix('forms')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/index', 'FormController@index')->name('index');
    Route::get('/admin/{formId}', 'FormController@adminForm')->name('get');
    Route::get('/{formId}', 'FormController@getForm')->name('get');
    Route::post('/store', 'FormController@store')->name('store');
    Route::post('/update', 'FormController@updateForm')->name('update');
    Route::post('/data', 'FormController@getForms');
    Route::post('/destroy', 'FormController@destroyForm')->name('destroy');
    Route::post('/questions/data/{formId}', 'FormController@getQuestionsByForm');
    Route::post('/store/question', 'FormController@storeQuestion')->name('question');
    Route::post('/question/update', 'FormController@updateQuestion')->name('question');
    Route::post('/question/destroy', 'FormController@destroyQuestion')->name('question');
    Route::get('/question/{questionId}', 'FormController@getQuestion')->name('question');
});

Route::name('evaluations.')->prefix('evaluations')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/index', 'EvaluationController@index')->name('index');
    Route::get('/{evalationId}', 'EvaluationController@getEvaluation')->name('get');
    Route::post('/store', 'EvaluationController@store')->name('store');
    Route::post('/update', 'EvaluationController@updateEvaluation')->name('update');
    Route::post('/data', 'EvaluationController@getEvaluations');
    Route::post('/destroy', 'EvaluationController@destroyEvaluation')->name('destroy');
});

Route::name('evaluation.')->prefix('evaluation')->middleware('auth')->group(function () {
    Route::get('/index', 'EvaluationStudentController@index')->name('index');
    Route::get('/questions/{formId}', 'EvaluationStudentController@getQuestions')->name('get');
    Route::post('/answers/store', 'EvaluationStudentController@storeAnswers')->name('answers');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

