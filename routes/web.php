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



Auth::routes();
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/a', function () {
    return view('pages.register');
});
Route::get('/student', function () {
    return view('pages.Information.student');
});
Route::get('/student=View', function () {
    return view('pages.Information.studentView');
});
Route::get('/time', function () {
    return view('pages.Time.timeTable');
});
Route::get('/time=View', function () {
    return view('pages.Time.timeSubj');
});
Route::get('/student=Create', function () {
    return view('pages.Information.studentCreate');
});
Route::get('generate-pdf/{id}','pdfController@downloadPDF');
Route::get('pdf','pdfController@report');
Route::get('time/timepdf/{id}','pdfController@timereport');
Route::resource('school', 'SchoolController');
Route::resource('student', 'StudentController');
Route::resource('time', 'timeControler');
Route::get('/home', 'HomeController@index')->name('home');
