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
use App\Http\Controllers\SpellsController;
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

Route::resource('categories', CategoriesController::class)->only('index');
Route::resource('spells', SpellsController::class)->only('index');
Route::get('spells/{spell}/{page?}', [SpellsController::class, 'show'])->name('spells.show');
Route::get('/search', [SpellsController::class, 'search'])->name('spells.search');

Route::get('categories/{category}/characters', [CharactersController::class, 'index'])->name('characters.index');
Route::resource('heroes', CharactersController::class)->except('index');

Route::middleware('auth')->group(function () {
    Route::get('/create/options', function () {
        return view('create_options');
    })->name('create.options');

    Route::resource('adventures', AdventuresController::class)->only('create', 'store');
    Route::resource('attacks', AttacksController::class)->only('create', 'store');
    Route::resource('backgrounds', BackgroundsController::class)->only('create', 'store');
    Route::resource('features', FeaturesController::class)->only('create', 'store');
    Route::resource('goals', GoalsController::class)->only('create', 'store');
    Route::resource('races', RacesController::class)->only('create', 'store');
    Route::resource('subraces', SubRacesController::class)->only('create', 'store');
    Route::resource('utilities', UtilitiesController::class)->only('create', 'store');
    Route::resource('weapons', WeaponsController::class)->only('create', 'store');
});

require __DIR__.'/auth.php';
