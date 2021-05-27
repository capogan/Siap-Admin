<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiMasterController extends Controller
{
    public function get_user(Request $request){

        if($request->no_ktp == '122011611890003'){

            $json = [
                "identity_id"=> "122011611890003",
                "name"=> "Sahala Morgan Tobing",
                "address"=> "Jl Kramat Lontar III no 50",
                "gender"=> "Pria",
                "phone_number"=> "085275608469",
            ];
            $json = [
                "status"=> "success",
                "message"=> "Data ditemukan",
                "data" => $json
            ];
        }else{
            $json = [
                "status"=> "error",
                "message"=> "Data tidak berhasil ditemukan",
                "data" => ""
            ];
        }


        return response()->json($json);
    }
}
