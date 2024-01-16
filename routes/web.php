<?php

use App\Http\Controllers\backController;
use App\Http\Controllers\BooknowController;
use App\Http\Controllers\FinaldataController;
use App\Http\Controllers\userController;
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

Route::view('/','welcome');
Route::view('home','home');
Route::view('about','about');
Route::view('cont','contact');
Route::view('admin/deshbord','admin.deshbord');




Route::post('/ragester' , [userController::class ,'ragester']);
Route::post('/insert-data', [backController::class, 'backdata']);
Route::post('/book-now', [BooknowController::class,'booknow' ]);
Route::post('/last-input', [FinaldataController::class, 'finaldata']);

