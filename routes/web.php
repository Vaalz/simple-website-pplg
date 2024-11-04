<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin',function(){
    return view('admin.dashboard');
})->middleware('auth');

Route::get('admin/categories',function(){
    return view('admin.categories.index');
})->middleware('auth');

Route::post('admin/category', [App\Http\Controller\CategoryController::class,'create']);

Route::get('login', function(){
    return view('admin.login');
})->name(name: 'login');

Route::post('login',[AuthController::class,'login']);