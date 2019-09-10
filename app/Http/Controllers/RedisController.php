<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        try {
            $redis = Redis::connection('redis', 16379);
            return response('redis working');
        } catch (\Predis\Connection\ConnectionException $e) {
            return reponse('redis connection error');
        }
    }
}
