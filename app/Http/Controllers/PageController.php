<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static function index() {

        return view('guest.home.index');
    }
}
