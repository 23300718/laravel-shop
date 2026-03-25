<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'pict1.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'pict2.jpg'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 2500, 'path' => 'pict3.jpg'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 800, 'path' => 'pict1.jpg'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 1200, 'path' => 'pict2.jpg'],
        ['id' => 6, 'title' => 'продукт 6', 'price' => 3000, 'path' => 'pict3.jpg'],
        ['id' => 7, 'title' => 'продукт 7', 'price' => 450, 'path' => 'pict1.jpg'],
        ['id' => 8, 'title' => 'продукт 8', 'price' => 2100, 'path' => 'pict2.jpg'],
    ];

    public function showIndex()
    {
        return view('home');
    }
    public function showArray()
    {
        $array = $this->array;
        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->array;
        usort($array, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = array_filter($this->array, function($item) {
            return $item['price'] > 1000;
        });
        return view('array', compact('array'));
    }
}
