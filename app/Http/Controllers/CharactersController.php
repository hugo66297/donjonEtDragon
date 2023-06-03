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
use Illuminate\Support\Str;
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
        $hero = new Character();

        $hero->fill($request->validated('hero'));
        $hero->equipment = Str::markdown(strip_tags($request->validated('hero.equipment'), ['<p>', '<strong>', '<ul>', '<li>']));
        $hero->character_past = Str::markdown(strip_tags($request->validated('hero.character_past'), ['<p>', '<strong>', '<ul>', '<li>']));
        $hero->save();

        $hero->abilities()->sync(\Arr::divide($request->validated('abilities'))[1]);
        $hero->skills()->sync(\Arr::divide($request->validated('skills'))[1]);
        $hero->savingThrows()->sync(\Arr::divide($request->validated('savingThrows'))[1]);
        $hero->coins()->sync(\Arr::divide($request->validated('coins'))[1]);
        $hero->adventures()->sync($request->validated('adventures'));
        if ($request->validated('attacks')) {
            $hero->attacks()->sync(\Arr::divide($request->validated('attacks'))[1]);
        }
        if ($request->validated('utilities')) {
            $hero->utilities()->sync(\Arr::divide($request->validated('utilities'))[1]);
        }
        $hero->features()->sync($request->validated('features'));
        $hero->weapons()->sync($request->validated('weapons'));


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
