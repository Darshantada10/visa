<?php

use App\Http\Controllers\BackEnd\CourseController;
use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\BackEnd\UniversityController;
use App\Http\Controllers\FrontEnd\AuthController;
use App\Http\Controllers\FrontEnd\HomeController;
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



//Home Routes
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);

//Login Routes
Route::get('/login',[AuthController::class,'index'])->middleware('guest');
Route::post('/login',[AuthController::class,'login'])->middleware('guest');

//Logout Routes
Route::get('/logout',[AuthController::class,'logout']);

//Partner routes
Route::prefix('/partner')->middleware(['auth','Is_Partner','web'])->group(function()
{
    
    //Dashboard Routes
    Route::get('/dashboard',[DashboardController::class,'index']);
    
    //Universities Routes
    Route::get('/all-universities',[UniversityController::class,'index']);
    Route::get('/add-universities',[UniversityController::class,'create']);
    Route::get('/edit-universities/{id}',[UniversityController::class,'edit']);

    //Courses Routes
    Route::controller(CourseController::class)->group(function()
    {
        Route::get('/all-courses','index');
        Route::get('/add-courses','create');
        Route::get('/edit-courses/{id}','edit');
    });

});
