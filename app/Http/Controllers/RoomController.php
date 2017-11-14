<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Room;
use App\suite;


class RoomController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    public function index()
    {
        $suites = suite::all();

        return view('rooms', compact('suites'));
    }



    public function create($building  , $suiteId)
    {
      //  dd($building,$suiteId);
        $suite = suite::findOrFail($suiteId);
        return view('create.room' , compact('building','suite'));
    }


    public function show($building , $suite )
    {


        $room = Room::where('suite_id', $suite )->get();
       // dd($room);
        $suiteID = suite::findOrFail($suite);
        return view('rooms' , compact('room', 'building', 'suite' , 'suiteID' ));
    }



    public function store(Request $request )
    {


        $this->validate($request,[
            'room_number' => 'required|unique:rooms,room_number'
        ]);


        Room::create($request->except('building_number'));

        return redirect()->route('suites.index');
    }

}
