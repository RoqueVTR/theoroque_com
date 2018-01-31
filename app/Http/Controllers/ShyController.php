<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShyController extends Controller
{
    public function index() {
        return view('shy.index');
    }

    public function first() {
        return view('shy.first');
    }

    public function second() {
        return view('shy.second');
    }

    public function third() {
        return view('shy.third');
    }

    public function fourth() {
        return view('shy.fourth');
    }

    public function fifth() {
        return view('shy.fifth');
    }

    public function sixth() {
        return view('shy.sixth');
    }

    public function seventh() {
        return view('shy.seventh');
    }

    public function last() {
        return view('shy.last');
    }
}
