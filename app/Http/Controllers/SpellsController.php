<?php

namespace App\Http\Controllers;

use App\Models\Spell;
use Illuminate\Http\Request;

class SpellsController extends Controller
{
    public function index()
    {
        $spells = Spell::paginate(20);
        return view('spells.index')->with(compact('spells'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spell  $spell
     * @return \Illuminate\Http\Response
     */
    public function show(Spell $spell)
    {
        return view('spells.show')->with(compact('spell'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spell  $spell
     * @return \Illuminate\Http\Response
     */
    public function edit(Spell $spell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spell  $spell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spell $spell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spell  $spell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spell $spell)
    {
        //
    }
}
