<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubRaces\StoreSubRaceRequest;
use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Http\Request;

class SubRacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $races = Race::all();
        return view('subraces.create')->with(compact('races'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSubRaceRequest $request)
    {
        $subRace = new SubRace;
        $subRace->fill($request->validated());
        $subRace->description = strip_tags($request->validated('description'), ['<p>', '<strong>', '<ul>', '<li>']);
        $subRace->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubRace  $subRace
     * @return \Illuminate\Http\Response
     */
    public function show(SubRace $subRace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubRace  $subRace
     * @return \Illuminate\Http\Response
     */
    public function edit(SubRace $subRace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubRace  $subRace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubRace $subRace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubRace  $subRace
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubRace $subRace)
    {
        //
    }
}
