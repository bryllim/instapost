<?php

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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/editprofile', [App\Http\Controllers\HomeController::class, 'editprofile'])->name('editprofile');
Route::post('/updateprofile', [App\Http\Controllers\HomeController::class, 'updateprofile'])->name('updateprofile');


// Post Routes
Route::post('/createpost', [App\Http\Controllers\PostController::class, 'create'])->name('createpost');
Route::get('/deletepost/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('deletepost');

// Comment Routes
Route::post('/createcomment', [App\Http\Controllers\CommentController::class, 'create'])->name('createcomment');