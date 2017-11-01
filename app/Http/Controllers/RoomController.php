<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('show_all_rooms');
    }


    public function create()
    {
        return view('create_room');
    }
}
