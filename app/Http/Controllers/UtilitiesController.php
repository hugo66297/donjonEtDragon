<?php

namespace App\Http\Controllers;

use App\Http\Requests\Utilities\StoreUtilityRequest;
use App\Models\Utility;
use Illuminate\Http\Request;

class UtilitiesController extends Controller
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
        return view('utilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUtilityRequest $request)
    {
        $utility = new Utility;
        $utility->fill($request->validated());
        $utility->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utility  $utility
     * @return \Illuminate\Http\Response
     */
    public function show(Utility $utility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utility  $utility
     * @return \Illuminate\Http\Response
     */
    public function edit(Utility $utility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utility  $utility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utility $utility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utility  $utility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utility $utility)
    {
        //
    }
}
