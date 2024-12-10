<?php

use App\Http\Controllers\AuthCOntroller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserDescriptionController;
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


Route::controller(MenuController::class)->group(function(){
    Route::get('/','index');
    Route::get('/menu','get_menu');
    Route::get('/checkauth','checkAuth');
});


Route::controller(AuthCOntroller::class)->group(function(){
    Route::get('/signin','signin')->name('signin');
    Route::get('/signup','signup')->name('signup');
    Route::post('/signin','get_signin')->name('signin.post');
    Route::post('/signup','get_signup')->name('signup.post');
});

Route::get('/personal',function(){return response(1);})->name('personal');

Route::controller(CartController::class)->group(function(){
    Route::post('/cart','get_cart');
    Route::post('/carts','get_carts');
    Route::get('/carts','get_carts');
    Route::post('/cart/up','up_cart')->middleware('auth');
    Route::post('/cart/down','down_cart')->middleware('auth');
    Route::post('/cart/delete','delete_cart')->middleware('auth');
    Route::post('/cart/create','create_cart')->middleware('auth');
});

Route::controller(UserDescriptionController::class)->group(function(){
    Route::get('/personal','index')->middleware('auth')->name('personal');
    Route::post('/personal','read')->middleware('auth');
    Route::post('/personal/update','update')->middleware('auth');
    Route::post('/personal/photo','download_photo')->middleware('auth');
});