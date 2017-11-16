<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;



class BuildingController extends Controller
{
    public function index()
    {

        $building = Building::all();
      //  $suite = Suite::all();
     //   $room = Room::all();
      //  dd( $building->first()->suites()->count() );
      // dd( $building->first()->suites->rooms() );
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
