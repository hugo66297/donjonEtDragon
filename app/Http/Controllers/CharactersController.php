<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Models\Category;
use App\Models\Character;
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
        return view('characters.create');
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
