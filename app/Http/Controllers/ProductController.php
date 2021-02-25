<?php

namespace App\Http\Controllers;

use App\Location;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    static $CONFIG = [
        "title" => "Produk",
        "subtitle" => "Data semua produk",
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $product = Products::where('status',true)->get();
        $data = [
            'product' => $product
        ];
        return view('pages.product.index', $this->merge_response($data, static::$CONFIG));
    }

    public function add(){
        $data = [
            'location' => ''
        ];
        return view('pages.product.add', $this->merge_response($data, static::$CONFIG));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'tenor' => 'required',
            'admin_fee' => 'required|numeric',
            'interest_fee' => 'required|numeric',
            'penalty_fee' => 'required|numeric',
            'max_penalty_fee' => 'required|numeric'
        ],
            [
                'product_name.required' => 'Nama Produk harus diisi',
                'admin_fee.required' => 'Biaya Admin harus diisi',
                'interest_fee.required' => 'Bunga harus diisi',
                'penalty_fee.required' => 'Denda harus diisi',
                'max_penalty_fee.required' => 'Maksimal denda harus diisi',

                'admin_fee.numeric' => 'Biaya Admin harus berupa angka',
                'interest_fee.numeric' => 'Bunga harus berupa angka',
                'penalty_fee.numeric' => 'Denda harus berupa angka',
                'max_penalty_fee.numeric' => 'Maksimal denda harus berupa angka',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }
        if( $request->has('status')  ) {
            $status = true;
        } else {
            $status = false;
        }

        if($request->update_form == 'active'){

            DB::beginTransaction();
            try{
                Products::where([
                    ['id',$request->id],
                ])->update
                ([
                    "name"              => $request->product_name,
                    "tenor"             => $request->tenor,
                    "admin_fee"         => $request->admin_fee,
                    "interest_fee"      => $request->interest_fee,
                    "penalty_fee"       => $request->interest_fee,
                    "max_penalty_fee"   => $request->max_penalty_fee,
                    "status"            => $status,
                    "updated_at"        =>date('Y-m-d H:i:s'),
                ]);
                DB::commit();
                $message = "Produk Berhasil di Ubah";
            }
            catch (Exception $e) {
                DB::rollback();
            }

        }else{
            DB::beginTransaction();
            try{
                Products::create(
                    ([
                        "name"              => $request->product_name,
                        "tenor"             => $request->tenor,
                        "admin_fee"         => $request->admin_fee,
                        "interest_fee"      => $request->interest_fee,
                        "penalty_fee"       => $request->interest_fee,
                        "max_penalty_fee"   => $request->max_penalty_fee,
                        "status"            => $status,
                        "created_at"        =>date('Y-m-d H:i:s'),

                    ])
                );
                DB::commit();
                $message = "Produk Berhasil di simpan";
            }catch (Exception $e) {
                DB::rollback();
            }

        }

        return json_encode(['status'=> true, 'message'=> $message]);
    }

    public function edit(Request $request){

        $product = Products::where('id',$request->id)->first();
        $data = [
            'product' => $product
        ];
        return view('pages.product.edit', $this->merge_response($data, static::$CONFIG));
    }


    public function paging(Request $request){

        return DataTables::of(Products::orderBy('created_at','DESC')->get())->addIndexColumn()->make(true);
    }
}
