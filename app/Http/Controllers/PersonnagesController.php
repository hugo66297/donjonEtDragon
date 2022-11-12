<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Personnage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonnagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Category $category)
    {
        $personnages = Personnage::where('category_id', $category->getKey());
        return view('personnages.index', compact('personnages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Personnage $personnage
     * @return Application|Factory|View
     */
    public function show()
    {
        //@TODO ne pas oublier de remettre param fonction et compact
        return view('personnages.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Personnage $personnage
     * @return Response
     */
    public function edit(Personnage $personnage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Personnage $personnage
     * @return Response
     */
    public function update(Request $request, Personnage $personnage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Personnage $personnage
     * @return Response
     */
    public function destroy(Personnage $personnage)
    {
        //
    }
}
