<?php

use App\Http\Controllers\BackEnd\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\BackEnd\UniversityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Home Routes
Route::get('/logos',[HomeController::class,'logos']);
Route::get('/navbars',[HomeController::class,'navbars']);


//University Routes
Route::get('/all-universities',[UniversityController::class,'display']);
Route::post('/add-universities',[UniversityController::class,'store']);
Route::get('/edit-universities/{id}',[UniversityController::class,'edit_university']);
Route::post('/edit-universities/{id}',[UniversityController::class,'update']);
Route::get('/delete-universities/{id}',[UniversityController::class,'delete']);

//Course Routes
Route::get('/all-courses',[CourseController::class,'display']);
Route::get('/course-universities',[CourseController::class,'university']);
Route::post('/add-courses',[CourseController::class,'store']);
Route::get('/edit-courses/{id}',[CourseController::class,'edit_course']);
Route::post('/edit-courses/{id}',[CourseController::class,'update']);
Route::get('/delete-courses/{id}',[CourseController::class,'delete']);
