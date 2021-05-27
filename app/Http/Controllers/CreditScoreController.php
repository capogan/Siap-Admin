<?php

namespace App\Http\Controllers;
use App\CategoryScore;
use App\CreditScore;
use Illuminate\Http\Request;

class CreditScoreController extends Controller
{
    static $CONFIG = [
        "title" => "Kredit Skor",
        "subtitle" => "Mengubah kredit Skor",
        "icon" => "image"
    ];
    function index(Request $request){

        $category_score = CategoryScore::where('status',true)->with(['credit_score' => function ($q) {
            $q->orderBy('sequence', 'asc');
        }])->get();

        $data = [
            'category_score'=> $category_score,
        ];
        return view('pages.creditscore.index', $this->merge_response($data, static::$CONFIG));
    }

    function credit_score_submit(Request $request){


        CreditScore::where('id',$request->id)->update([
            'name_score' => $request->name_score,
            'score' => $request->score,
            'code' => $request->code,
            'status' => $request->status,
        ]);

        $message = 'Data '.$request->name_score.' berhasil di ubah';
        return json_encode(['status'=> true, 'message'=> $message   ]);

    }
}
