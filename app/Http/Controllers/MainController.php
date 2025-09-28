<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'Птица 1', 'price' => 100, 'path' => 'i1.png'],
            ['id' => 2, 'title' => 'Птица 2', 'price' => 250, 'path' => 'i2.png'],
            ['id' => 3, 'title' => 'Птица 3', 'price' => 3200, 'path' => 'i1.png'],
            ['id' => 4, 'title' => 'Птица 4', 'price' => 400, 'path' => 'i2.png'],
            ['id' => 5, 'title' => 'Птица 5', 'price' => 550, 'path' => 'i1.png'],
            ['id' => 6, 'title' => 'Птица 6', 'price' => 600, 'path' => 'i2.png'],
        ];

        return view('array', compact('array'));
    }
}