<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Models\Ability;
use App\Models\Alignment;
use App\Models\Background;
use App\Models\Category;
use App\Models\Character;
use App\Models\Race;
use App\Models\Weapon;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(Category $category)
    {
        $characters = Character::where('category_id', $category->getKey());
        return view('characters.index', compact('characters', 'category'));
    }

    public function create()
    {
        $categories = Category::all();
        $backgrounds = Background::all();
        $races = Race::all();
        $alignments = Alignment::all();
        $abilities = Ability::all();
        $weapons = Weapon::all();
        return view('characters.create')
            ->with(
                compact('categories', 'backgrounds',
                    'races',
                    'alignments',
                    'abilities',
                    'weapons'
                )
            );
    }

    public function store(StoreCharacterRequest $request)
    {

    }

    public function show(Character $character)
    {
        // @TODO compact('character')
        return view('characters.show');
    }

    public function edit(Character $character)
    {
        //
    }

    public function update(Request $request, Character $character)
    {
        //
    }

    public function destroy(Character $character)
    {
        //
    }
}
