<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public static function index() {

        $movies = Movie::all();

        return view('guest.home.index',compact('movies'));
    }
}
