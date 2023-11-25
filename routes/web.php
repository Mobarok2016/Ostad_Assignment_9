<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get('/',function(){
    return redirect('/portfolio/home');
});

Route::group(['prefix'=>'portfolio'],function(){
    Route::get('/home',[HomeController::class,'home'])->name('home');
    Route::get('/about',[AboutController::class,'about'])->name('about');
    Route::get('/projects',[ProjectController::class,'project'])->name('project');
    Route::get('/contact',[ContactController::class,'contact'])->name('contact');
});
