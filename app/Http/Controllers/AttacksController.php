<?php

namespace App\Http\Controllers;

use App\Http\Requests\Attacks\StoreAttackRequest;
use App\Models\Attack;
use Illuminate\Http\Request;

class AttacksController extends Controller
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
        return view('attacks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAttackRequest $request)
    {
        $attack = new Attack;
        $attack->fill($request->validated());
        $attack->description = strip_tags($request->validated('description'), ['<p>', '<strong>', '<ul>', '<li>']);
        $attack->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function show(Attack $attack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function edit(Attack $attack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attack $attack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attack $attack)
    {
        //
    }
}
