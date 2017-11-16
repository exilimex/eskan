<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suite;
use App\building;

class SuiteController extends Controller
{
    public function index()
    {
       $suites = suite::all();
       // dd(  $suites->first()->rooms()->count());
        return view('suites', compact('suites'));
    }


    public function create()
    {
        $building_number = building::all();

        return view('create.suite', compact('building_number'));
    }



    public function store(Request $request)
    {


        $this->validate($request,[
            'suite_number' => 'required|unique:suites,suite_number'
        ]);


        suite::create($request->all());

        return redirect()->route('suites.index');
    }

}
