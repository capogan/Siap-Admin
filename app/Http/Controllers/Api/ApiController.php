<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;

class ApiController extends Controller
{
    use ApiResponser;

    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            return $next($request);
        });
    }

}
