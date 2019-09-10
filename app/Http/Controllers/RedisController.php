<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Redis\RedisManager;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        try {
            $redis = RedisManager::connection();
            dd($redis);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
