<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home/{user_id}', [App\Http\Controllers\HomeController::class, 'index'])->name('home.show');

// Camp Zone
Route::get('/campzones', [App\Http\Controllers\CampController::class, 'index'])->name('campzones.list');
Route::get('/campzone/{campzone_id}', [App\Http\Controllers\CampController::class, 'show'])->name('campzone.show');
