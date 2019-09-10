<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        return response('redis ctrl');
        // try {
        //     $redis = Redis::connection('0.0.0.0', 6379);
        //     return response('redis working');
        // } catch (\Predis\Connection\ConnectionException $e) {
        //     return reponse('redis connection error');
        // }
    }
}
