<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detailposting/{id}', [App\Http\Controllers\HomeController::class, 'detailPosting'])->name('detailPosting');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/posting', [App\Http\Controllers\HomeController::class, 'posting'])->name('posting');
Route::get('/posting/detailposting/{id}', [App\Http\Controllers\HomeController::class, 'detail']);
Route::get('/posting/add', [App\Http\Controllers\HomeController::class, 'addPosting']);
Route::post('/posting/insert', [App\Http\Controllers\HomeController::class, 'insertposting']);
Route::get('/draft', [App\Http\Controllers\HomeController::class, 'draft'])->name('draft');
Route::post('/posting/insertdraft', [App\Http\Controllers\HomeController::class, 'insertdraft'])->name('draftposting');
Route::get('/posting/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/draft/edit/{id}', [App\Http\Controllers\HomeController::class, 'editdraft']);
Route::post('/posting/update/{id}', [App\Http\Controllers\HomeController::class, 'update']);
Route::get('/posting/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete']);
