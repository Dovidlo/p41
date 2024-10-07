<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show(){
    $a = 5;
    $b = 6;
    $sum = $a + $b;
    return view('first', compact('sum', 'a'));
    }



    public function showIndex(){
        return view('first');
    }

    public function showArray(){
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'img/img1.jpg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 600, 'path' => 'img/img1.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 700, 'path' => 'img/img1.jpg'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 800, 'path' => 'img/img1.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 900, 'path' => 'img/img1.jpg']
        ];
        return view('array', ['array' => $array]);        
    }
}
