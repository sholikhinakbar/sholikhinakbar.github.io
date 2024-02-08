<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerOpini;
use App\Http\Controllers\ControllerAuthor;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerRegister;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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

Route::get('/', [ControllerOpini::class, 'index']);
Route::get('/opini', [ControllerOpini::class, 'index']);


Route::get('/opini/{post:slug}', [ControllerOpini::class, 'singlepost']);
Route::get('/author/{user:slug}', [ControllerAuthor::class, 'singlepost']);
Route::get('/category/{category:slug}', [ControllerCategory::class, 'singlecategory']);

Route::get('/login', [ControllerLogin::class, 'index'])->name('login')->middleware('guest');
Route::get('/login/autenticate', [ControllerLogin::class, 'autenticate']);
Route::post('/logout', [ControllerLogin::class, 'logout']);


Route::get('/register', [ControllerRegister::class, 'index'])->middleware('guest');
Route::post('/register', [ControllerRegister::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
