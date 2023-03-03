<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function sayHello()
    {
        // dd('hello Controller :))');
        return view('index2');
    }

    public function cars()
    {
        return view('car.cars'); // 一階一個 ' . '
    }
}
