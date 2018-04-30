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

Route::get('/2110', function () {
//    return view('welcome');
    return redirect()->route('register');
});

Route::get('register', function () {
//    return view('welcome');
    return redirect()->route('login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HRcontroller@profile')->name('profile');
Route::get('/admin_profile', 'HRcontroller@admin_profile')->name('admin_profile');
Route::get('/calender', 'HRcontroller@calender')->name('calender');
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