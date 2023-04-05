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
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $hero = new Character();
        $hero->category_id = $request->get('category');
        $hero->background_id = $request->get('background');
        $hero->subrace_id = $request->get('subrace');
        $hero->alignment_id = $request->get('alignment');
        $hero->goal_id = $request->get('goal');

        $hero->fill($request->all($hero->getFillable()));
        $hero->save();

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
