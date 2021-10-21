<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [pageController::class,'HomePage'])->name('Home');
Route::get('/producu/service', [pageController::class,'ServicePage'])->name('Service');
Route::get('/ourTeam', [pageController::class,'TeamsPage'])->name('Teams');
Route::get('/contact', [pageController::class,'ContactPage'])->name('Contact');
Route::get('/about', [pageController::class,'AboutPage'])->name('About');
