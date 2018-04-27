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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HRcontroller@profile')->name('profile');
Route::get('/admin_profile', 'HRcontroller@admin_profile')->name('admin_profile');
Route::get('/test_calender', 'HRcontroller@test_calender')->name('test_calender');
Route::get('/calender', 'HRcontroller@calender')->name('calender');
Route::get('/admin_workhistory', 'HRcontroller@admin_workhistory')->name('admin_workhistory');
Route::get('/admin_kpi', 'HRcontroller@admin_kpi')->name('admin_kpi');
Route::get('/admin_calender', 'HRcontroller@admin_calender')->name('admin_calender');
Route::get('/test_teamlist', 'HRcontroller@test_teamlist')->name('test_teamlist');
Route::get('/notifications', 'HRcontroller@noti')->name('noti');
Route::get('/edit', 'HRcontroller@edit')->name('edit');
Route::get('/leave', 'HRcontroller@leave')->name('leave');
Route::get('/testex', 'HRcontroller@testex')->name('testex');