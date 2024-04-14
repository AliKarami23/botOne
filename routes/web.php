<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SpecialPeopleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ProfileController::class , 'panel'])->name('panel');
Route::get('/login', [UserController::class , 'showLogin'])->name('show.login');
Route::get('/change_pass', [ProfileController::class , 'showChangePass'])->name('change.pass');
Route::get('/edit_profile', [ProfileController::class , 'showEditProfile'])->name('edit.profile');
Route::get('/profile', [ProfileController::class , 'Profile'])->name('profile');
Route::get('/channel_list', [ChannelController::class,'List'])->name('channel.list');
Route::get('/group_list', [GroupController::class,'List'])->name('group.list');
Route::get('/special_people_list', [SpecialPeopleController::class,'List'])->name('special.people.list');
Route::get('/list_admin', [AdminController::class,'list'])->name('admin.list');
Route::get('/massage_list', [NotificationController::class,'List'])->name('massage.list');
Route::get('/add_special_people', [SpecialPeopleController::class , 'showForm'])->name('add.special.people');
Route::get('/send_notification',[NotificationController::class, 'showForm'])->name('send.notification');

