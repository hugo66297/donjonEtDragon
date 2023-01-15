<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CharactersController;
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
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/D&D/about', function () {
    return view('D&D infos et aventures.d_and_d');
})->name('aboutD&D');

Route::get('/D&D/aventures/lmop', function () {
    return view('D&D infos et aventures.aventure_lmop');
})->name('lmop');

Route::resource('categories', CategoriesController::class)->only('index');

Route::get('categories/{category}/characters', [CharactersController::class, 'index'])->name('characters.index');
Route::resource('characters', CharactersController::class)->except('index');

require __DIR__.'/auth.php';
