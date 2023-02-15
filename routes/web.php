<?php

use App\Http\Controllers\AdventuresController;
use App\Http\Controllers\AttacksController;
use App\Http\Controllers\BackgroundsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\RacesController;
use App\Http\Controllers\SubRacesController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\WeaponsController;
use App\Models\Adventure;
use App\Models\Attack;
use App\Models\Background;
use App\Models\Feature;
use App\Models\Goal;
use App\Models\Race;
use App\Models\Subrace;
use App\Models\Utility;
use App\Models\Weapon;
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

Route::get('/create/options', function () {
    return view('create_options');
})->name('create.options');

Route::resource('categories', CategoriesController::class)->only('index');

Route::get('categories/{category}/characters', [CharactersController::class, 'index'])->name('characters.index');
Route::resource('heroes', CharactersController::class)->except('index');

Route::resource('adventures', AdventuresController::class)->only('index', 'create', 'store', 'show');
Route::resource('attacks', AttacksController::class)->only('index', 'create', 'store', 'show');
Route::resource('backgrounds', BackgroundsController::class)->only('index', 'create', 'store', 'show');
Route::resource('features', FeaturesController::class)->only('index', 'create', 'store', 'show');
Route::resource('goals', GoalsController::class)->only('index', 'create', 'store', 'show');
Route::resource('races', RacesController::class)->only('index', 'create', 'store', 'show');
Route::resource('subraces', SubRacesController::class)->only('index', 'create', 'store', 'show');
Route::resource('utilities', UtilitiesController::class)->only('index', 'create', 'store', 'show');
Route::resource('weapons', WeaponsController::class)->only('index', 'create', 'store', 'show');

require __DIR__.'/auth.php';
