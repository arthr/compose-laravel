<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis as RedisConn;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        try {
            $redis = RedisConn::connection();
            dd($redis);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
