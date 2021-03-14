<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected const STATUS_VERIFICATION = "1";
    protected const STATUS_REJECT_SIAP = "4";
    protected const STATUS_REJECT_PCG = "5";

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function merge_response($data, $config = null){
        if($config == null){
            return $data;
        }

        return array_merge($data,$config);
    }
}
