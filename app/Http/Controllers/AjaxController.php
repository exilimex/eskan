<?php

namespace App\Http\Controllers;

use App\suite;
use Illuminate\Http\Request;
use DB;
use App\building;

class AjaxController extends Controller
{
    /**
     * Show the application myformSelection.
     *
     * @return \Illuminate\Http\Response
     */
    public function selection()
    {
        $buildings = building::pluck( "building_number", "id")->all();
        return view('selection',compact('buildings'));
    }

    /**
     * Show the application selectAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectAjax(Request $request)
    {
      // dd($request->building_id);
        if($request->ajax()){
            $states = suite::where('building_id',$request->building_id)->pluck("suite_number","id" )->all();
            $data = view('ajax-select',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }
}