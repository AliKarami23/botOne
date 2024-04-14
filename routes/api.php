<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\GroupController;

Route::post('/logout',[UserController::class , 'Logout'])->name('logout');
Route::get('/add_admin',[AdminController::class , 'showForm'])->name('add.admin');
Route::get('/filter_channels', [ChannelController::class, 'filterChannels'])->name('filter.channel');
Route::get('/filter_groups', [GroupController::class, 'filterGroups'])->name('filter.group');
Route::post('/send_massage', [NotificationController::class, 'sendMessageToGroupOrChannel'])->name('send.massage');
Route::get('/list_channels', [ChannelController::class, 'getAndListChannels'])->name('get.Channel');
Route::get('/list_groups', [GroupController::class, 'getAndListGroups'])->name('get.group');
