<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Models\Ability;
use App\Models\Adventure;
use App\Models\Alignment;
use App\Models\Attack;
use App\Models\Background;
use App\Models\Category;
use App\Models\Character;
use App\Models\Feature;
use App\Models\Goal;
use App\Models\Race;
use App\Models\Subrace;
use App\Models\Utility;
use App\Models\Weapon;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CharactersController extends Controller
{
    public function index(Category $category)
    {
        $heroes = Character::where('category_id', $category->getKey())->get();
        return view('characters.index', compact('heroes', 'category'));
    }

    public function create()
    {
        return view('characters.create');
    }

    public function store(StoreCharacterRequest $request)
    {
        $abilities = \Arr::divide($request->validated('abilities'))[1];
        $skills = \Arr::divide($request->validated('skills'))[1];
        $savingThrows = \Arr::divide($request->validated('savingThrows'))[1];

        $hero = new Character();
        $hero->fill($request->validated('hero'));
        $hero->save();

        $hero->abilities()->sync($abilities);
        $hero->skills()->sync($skills);
        $hero->savingThrows()->sync($savingThrows);
        $hero->features()->sync($request->validated('features'));
        $hero->features()->sync($request->validated('weapons'));

        // Attacks
//        foreach (Request::input('attackIds') as $index => $attackId) {
//            $hero->attacks()
//                ->attach($attackId, ['other_description' => Request::input('attackDescriptions')[$index]]);
//        }
        // Utilities
//        foreach (Request::input('maitriseIds') as $index => $maitriseId) {
//            $hero->utilities()
//                ->attach($maitriseId, ['description' => Request::input('maitriseDescriptions')[$index]]);
//        }
        // Weapons
//        foreach (Request::input('weapons') as $weaponData) {
//            $hero->weapons()->attach(Weapon::getWeaponIdByInfos($weaponData));
//        }
        // Coins
//        foreach (Request::input('coins') as $coinId => $quantity) {
//            $hero->coins()->attach($coinId, ['quantity' => $quantity ?? 0]);
//        }

        return redirect()->route('heroes.show', compact('hero'));
    }

    public function show(Character $hero)
    {
        return view('characters.show')->with(compact('hero'));
    }

    public function edit(Character $hero)
    {
        //
    }

    public function update(Request $request, Character $hero)
    {
        //
    }

    public function destroy(Character $hero)
    {
        //
    }
}
