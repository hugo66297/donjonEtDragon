<?php

namespace App\Http\Controllers;

use App\Http\Requests\Adventures\StoreAdventureRequest;
use App\Models\Adventure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdventuresController extends Controller
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
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('adventures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAdventureRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAdventureRequest $request)
    {
        $adventure = new Adventure;
        $adventure->fill($request->validated());
        $adventure->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adventure  $adventure
     * @return \Illuminate\Http\Response
     */
    public function show(Adventure $adventure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adventure  $adventure
     * @return \Illuminate\Http\Response
     */
    public function edit(Adventure $adventure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adventure  $adventure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adventure $adventure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adventure  $adventure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adventure $adventure)
    {
        //
    }
}
