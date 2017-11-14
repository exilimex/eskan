<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suite;

class SuiteController extends Controller
{
    public function index()
    {
        return view('suites');
    }


    public function create()
    {
        return view('create.suite');
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
