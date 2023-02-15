<?php

namespace App\Http\Controllers;

use App\Http\Requests\Weapons\StoreWeaponRequest;
use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponsController extends Controller
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
        return view('weapons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreWeaponRequest $request)
    {
        $weapon = new Weapon;
        $weapon->fill($request->validated());
        $weapon->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function show(Weapon $weapon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function edit(Weapon $weapon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weapon $weapon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weapon $weapon)
    {
        //
    }
}
