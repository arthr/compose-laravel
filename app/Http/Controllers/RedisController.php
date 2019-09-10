<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        try {
            $redis = Redis::connection('0.0.0.0', 16379);
            return response('test');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
