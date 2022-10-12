<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/addiction', [HomeController::class, 'addiction'])->name('addiction');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/team', [HomeController::class, 'team'])->name('team');

Route::get('/contactus', [ContactController::class, 'index'])->name('contact');
Route::post('/contactus', [ContactController::class, 'store'])->name('contactus');
