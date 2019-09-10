<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        try {
            $redis = Redis::connection();
            dd($redis);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
