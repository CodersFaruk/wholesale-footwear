<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*===========================================
*                   Admin Routes            *
============================================*/
Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
//    Category Routes
    Route::get('addcategory',[CategoryController::class,'index'])->name('admin.addcategory');
    Route::post('store',[CategoryController::class,'store'])->name('category.store');
    Route::get('show',[CategoryController::class,'show'])->name('show.category');
    Route::get('editcategory/{id}',[CategoryController::class,'edit'])->name('edit.category');
    Route::post('updatecategory/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('deletetecategory/{id}',[CategoryController::class,'destroy'])->name('delete.category');

    //    Product Routes
    Route::get('addProduct',[ProductController::class,'index'])->name('add.product');
    Route::post('productStore',[ProductController::class,'store'])->name('store.product');
    Route::get('productShow',[ProductController::class,'show'])->name('show.product');
    Route::get('editProduct/{id}',[ProductController::class,'edit'])->name('edit.product');
    Route::post('updateProduct/{id}',[ProductController::class,'update'])->name('update.product');
    Route::delete('deleteProduct/{id}',[ProductController::class,'destroy'])->name('delete.product');


});

/*===========================================
*                   User Routes             *
============================================*/
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'user'], function(){
    Route::get('dashboard',[UserController::class, 'index'])->name('user.dashboard');
});

/*===========================================
*                   Frontend Routes             *
============================================*/
Route::get('/',[FrontendController::class,'index'])->name('frontend.home');
