<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\building;


class BuildingController extends Controller
{
    public function index()
    {

        $building = DB::table()->get();
        return view('buildings', compact('building'));

    }


    public function create()
    {
        return view('create.building');
    }

    public function store(Request $request)
    {

        $this->validate($request,['building_number' => 'required']);

        $this->validate($request,[
            'building_number' => 'required|unique:buildings,building_number'
        ]);
        building::create($request->all());

        return redirect()->route('buildings.index');
    }


}
