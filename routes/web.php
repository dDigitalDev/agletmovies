<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;


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




Auth::routes();


Route::get('/', [LandingController::class, 'index'])->name('/');
Route::get('/addfavourite/{id}', [HomeController::class, 'addfavourite'])->name('addfavourite');
Route::get('/favourite', [HomeController::class, 'favourite'])->name('favourite');
Route::get('/removefavourite/{id}', [HomeController::class, 'removefavourite'])->name('removefavourite');
Route::get('/contact', function () {
    return view('pages.contact');
});
?>