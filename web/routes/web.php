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
//    return view('welcome');
    return redirect()->route('login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HRcontroller@profile')->name('profile');
Route::get('/admin_profile', 'HRcontroller@admin_profile')->name('admin_profile');
//Route::get('/calender', 'HRcontroller@calender')->name('calender');
Route::get('/calender', 'EventController@index')->name('calender');
Route::get('/admin_workhistory', 'HRcontroller@admin_workhistory')->name('admin_workhistory');
Route::get('/admin_kpi', 'HRcontroller@admin_kpi')->name('admin_kpi');
Route::get('/admin_calender', 'HRcontroller@admin_calender')->name('admin_calender');
Route::get('/admin_notifications', 'HRcontroller@noti')->name('noti');
Route::get('/admin_salary', 'HRcontroller@admin_salary')->name('salary');
Route::get('/admin_branchLocation', 'HRcontroller@admin_branchLocation')->name('admin_branchLocation');
Route::get('/admin_certificate', 'HRcontroller@admin_certificate')->name('admin_certificate');
Route::get('/admin_payment', 'HRcontroller@admin_payment')->name('admin_payment');
Route::get('/admin_salaryEdit', 'HRcontroller@admin_salaryEdit')->name('admin_salaryEdit');
Route::get('/edit', 'HRcontroller@edit')->name('edit');
Route::get('/leave', 'HRcontroller@leave')->name('leave');
Route::get('/testex', 'HRcontroller@testex')->name('testex');
//form evident
Route::post('/saveFormEv', 'HRcontroller@saveFormEvident')->name('saveFormEvident');
//kpi
Route::post('/calKPI', 'HRcontroller@calKPI')->name('calKPI');
//Route::get('/testex2', 'HRcontroller@testex2')->name('testex2');
Route::get('/testex2', 'EventController@index')->name('testex2');

//uploadfile
Route::post('/uploadfile','UploadFileController@UploadFileEvidence')->name('uploadfile');
Route::post('/storeImage','UploadFileController@storeImage')->name('storeImage');
Route::get('/allImages','UploadFileController@allImages')->name('allImages');
Route::delete('/deleteImage/{id}','UploadFileController@deleteImage')->name('deleteImage');

//delete file
Route::get('/deleteFile','UploadFileController@deleteFIle')->name('deleteFIle');

//search
Route::get('/ss','SearchController@index')->name('ssearch');
Route::get('/search','SearchController@search')->name('search');
//calender
Route::get('/calender_eiei','CalenderController@calender')->name('calender_eiei');

//fullcalendar
Route::get('events', 'EventController@index')->name('events');

//edit
Route::get('/edit/{id}', 'EventController@edit')->name('calender_edit');
Route::post('/editSave', 'EventController@editSave')->name('calender_editSave');
