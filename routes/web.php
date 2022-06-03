<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*===========================================
*                   Admin Routes            *
============================================*/
Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
});

/*===========================================
*                   User Routes             *
============================================*/
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'user'], function(){
    Route::get('dashboard',[UserController::class, 'index'])->name('user.dashboard');
});
