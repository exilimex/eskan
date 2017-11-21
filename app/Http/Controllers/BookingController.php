<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;
use App\building;
use App\suite;
use App\Room;
use App\Student;


class BookingController extends Controller
{


    /**
     * Show the application myformSelection.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = building::pluck( "building_number", "id")->all();
        $students = Student::where('reservation','=', 0 )->pluck("full_name","id")->all();

        return view('booking',compact('buildings','students'));
    }

    /**
     * Show the application selectAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectAjax(Request $request)
    {

        if($request->ajax()){
            $states = suite::where('building_id',$request->building_id)->pluck("suite_number","id" )->all();
            $data = view('ajax-select',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }

    public function selectRoom(Request $request)
    {

        if($request->ajax()){
            $states = Room::where([
                ['suite_id',$request->suite_id],
                ['number_of_guests','>=', 1 ],
            ])->pluck("room_number","id" );
            $data = view('ajax-select',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }


    public function create()
    {
        return view('create.building');
    }


    public function store(Request $request )
    {

//        $this->validate($request,[
//            'room_number' => 'required|unique:rooms,room_number'
//        ]);

        $room = Room::findOrFail($request->room_id);
        if ($room->number_of_guests < 1 ){
            return back()->withErrors(['لا يوجد شاغر في الغرفة']);
        }

        $room->decrement('number_of_guests');


        $student = Student::findOrFail($request->student_id);
        $student->increment('reservation');


        booking::create($request->all());

        return redirect()->route('suites.index');
    }

}
