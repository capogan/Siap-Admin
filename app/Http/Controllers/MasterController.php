<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    function get_location(Request $request){

            $search = $request->search;

            $location = Location::orderby('name','asc')->select('id','name')->where('parent_id','=',null)->where('name', 'ilike', '%' .$search . '%')->limit(10)->get();
            $response = array();
            foreach($location as $locate){
                $response[] = array(
                    "id"=>$locate->id,
                    "text"=>$locate->name
                );
            }

            echo json_encode($response);


    }
}
