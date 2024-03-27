<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('Pages.panel');})->name('panel');

Route::get('/login', function () {return view('Pages.login');})->name('login');

//profile
Route::get('/change_pass', function () {return view('Pages.change_pass');})->name('change_pass');
Route::get('/edit_profile', function () {return view('Pages.edit_profile');})->name('edit_profile');
Route::get('/profile', function () {return view('Pages.profile');})->name('profile');
Route::get('/logout',function (){return view('pages.panel');})->name('logout');

//list
Route::get('/channel_list', function () {return view('lists.channel_list');})->name('channel_list');
Route::get('/group_list', function () {return view('lists.group_list');})->name('group_list');
Route::get('/special_people_list', function () {return view('lists.special_people_list');})->name('special_people_list');
Route::get('/admin_list', function () {return view('lists.admin_list');})->name('admin_list');
Route::get('/massage_list', function () {return view('lists.massage_list');})->name('massage_list');

//adds
Route::get('/add_admin',function (){return view('pages.add_admin');})->name('add_admin');
Route::get('/add_special_people',function (){return view('pages.add_special_people');})->name('add_special_people');

Route::get('/send_notification',function (){return view('pages.send_notification');})->name('send_notification');
