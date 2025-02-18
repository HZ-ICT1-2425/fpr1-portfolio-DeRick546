<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

/*
 * The home routes
 */
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
 * The resource routes
 */
Route::resource('tasks', TaskController::class);
Route::resource('posts', PostController::class);
Route::resource('projects', ProjectController::class);

/*
 * Route that shows the about page. This handler just returns the about view.
 */
Route::view('/about', 'about')->name('about');
Route::view('/converter', 'converter')->name('converter');
