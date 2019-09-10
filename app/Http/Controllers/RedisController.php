<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        try {
            \Cache::store('redis')->put('Laradock', 'Awesome', 10);
            $redis = new \Redis();
            dd($redis);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
