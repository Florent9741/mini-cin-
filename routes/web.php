<?php

use App\Http\Controllers\FilmsController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', [FilmsController::class, 'getAll'])->name('Films');

Route::get('/film/{id}', [FilmsController::class, 'show'])->whereNumber('id')->name('film')->middleware('Auth');

Route::get('/addfilms', [FilmsController::class, 'addFilms'])->name('addfilms');
Route::post('/addfilms', [FilmsController::class, 'addFilms'])->name('addfilms');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'add'])->name('add');

Route::delete('/delete/{id}', [FilmsController::class, 'delete'])->name('delete');

Route::get('/login', function () {
    return view('login');
})->name('connexion');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', function () {
    return view('login');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
