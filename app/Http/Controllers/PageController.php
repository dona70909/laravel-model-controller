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

    public function insert(Request $request){

        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->original_title = $request->input('original_title');
        $movie->nationality = $request->input('nationality');
        $movie->date = $request->input('date');
        $movie->vote = $request->input('vote'); 

        $movie->save();
    }

    public static function show() {
        return view('guest.home.show');
    }


}
