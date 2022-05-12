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
        $movie->title = $request->title;
        $movie->original_title = $request->original_title;
        $movie->nationality = $request->nationality;
        $movie->date = $request->date;
        $movie->vote = $request->vote; 
        $movie->save();

        return redirect('/')->with('status', 'Content Has Been inserted');
    }

    public static function show() {
        return view('guest.home.show');
    }


}
