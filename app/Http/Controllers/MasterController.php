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

    public function jwt(){
        $header = JSON_encode([
            'typ' => 'JWT',
            'alg' => 'HS256'
        ]);

        $payload = JSON_encode([
            'clientId' => 'f94a5de7-243c-424a-bd46-42fcdd095621',
            'accountNo' => '0115476117'
        ]);



        $base64UrlHeader = str_replace(
            ['+', '/', '='], ['-', '_', ''], base64_encode($header)
        );

        $base64UrlPayload = str_replace(
            ['+', '/', '='], ['-', '_', ''], base64_encode($payload)
        );


        $signature = hash_hmac(
            'sha256', $base64UrlHeader.".".$base64UrlPayload, 'aa5596e4-5782-4329-b69d-38eacd1a05ba', true
        );

        $base64UrlSignature = str_replace(
            ['+', '/', '='], ['-', '_', ''], base64_encode($signature)
        );


        // Create JWT
        $jwt = $base64UrlHeader.".".$base64UrlPayload.".".$base64UrlSignature;
        echo $jwt;
    }
}
