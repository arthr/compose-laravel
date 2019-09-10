<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        try {
            $redis = new \Redis();
            dd($redis);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
