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
Route::get('/test', 'HRcontroller@test')->name('test');
Route::get('/test_calender', 'HRcontroller@test_calender')->name('test');
Route::get('/test_workhistory', 'HRcontroller@test_workhistory')->name('test_workhistory');
Route::get('/test_teamlist', 'HRcontroller@test_teamlist')->name('test_teamlist');
Route::get('/notifications', 'HRcontroller@noti')->name('noti');
Route::get('/edit', 'HRcontroller@edit')->name('edit');
Route::get('/leave', 'HRcontroller@leave')->name('leave');
Route::get('/testex', 'HRcontroller@testex')->name('testex');