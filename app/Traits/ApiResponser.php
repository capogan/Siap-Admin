<?php

namespace App\Traits;

trait ApiResponser{

    protected function successResponse($data, $message = "success", $code = "000")
    {
        return response()->json([
            'status'=> 'success',
            'code' => $code,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    protected function errorResponse($message = null, $code="500")
    {
        return response()->json([
            'status'=>'error',
            'code' => $code,
            'message' => $message,
            'data' => null
        ], 200);
    }

}