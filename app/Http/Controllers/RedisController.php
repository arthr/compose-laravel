<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        print_r('Redis');
    }
}
