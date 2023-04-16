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
        $categories = Category::all();
        $backgrounds = Background::all();
        $races = Race::all();
        $alignments = Alignment::all();
        $abilities = Ability::all();
        $weapons = Weapon::all();
        $utilities = Utility::all();
        $attacks = Attack::all();
        $features = Feature::all();
        $subRaces = Subrace::all();
        $goals = Goal::all();
        $adventures = Adventure::all();
        return view('characters.create')
            ->with(
                compact('categories',
                    'backgrounds',
                    'races',
                    'alignments',
                    'abilities',
                    'weapons',
                    'utilities',
                    'attacks',
                    'features',
                    'subRaces',
                    'goals',
                    'adventures'
                )
            );
    }

    public function store(StoreCharacterRequest $request)
    {
        $hero = new Character();
        foreach ($hero->getFillable() as $field) {
            $hero->$field = $request->validated($field);
        }
        $hero->save();

        // Abilities and skills
        foreach (Request::input('abilities') as $abilityId => $ability) {
            $hero->abilities()->attach($abilityId, $ability['attributes']);

            $savingThrow = array_key_exists('savingThrow', $ability) ? $ability['savingThrow'] : [];
            $hero->savingThrows()->attach($savingThrow['charactable_id'], $savingThrow);

            $skills = array_key_exists('skills', $ability) ? $ability['skills'] : [];
            foreach ($skills as $skillId => $skill) {
                $hero->skills()->attach($skillId, $skill);
            }
        }

        // Attacks
        foreach (Request::input('attackIds') as $index => $attackId) {
            $hero->attacks()
                ->attach($attackId, ['other_description' => Request::input('attackDescriptions')[$index]]);
        }
        // Utilities
        foreach (Request::input('maitriseIds') as $index => $maitriseId) {
            $hero->utilities()
                ->attach($maitriseId, ['description' => Request::input('maitriseDescriptions')[$index]]);
        }
        // Features
        foreach (Request::input('features') as $featureId) {
            $hero->features()->attach($featureId);
        }
        // Weapons
        foreach (Request::input('weapons') as $weaponData) {
            $hero->weapons()->attach(Weapon::getWeaponIdByInfos($weaponData));
        }
        // Coins
        foreach (Request::input('coins') as $coinId => $quantity) {
            $hero->coins()->attach($coinId, ['quantity' => $quantity ?? 0]);
        }

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
