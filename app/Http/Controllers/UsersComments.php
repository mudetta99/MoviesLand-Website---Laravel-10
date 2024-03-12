<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\User;
use App\Models\UserComment;

class UsersComments extends Controller
{

    // Store Users Comments in the Database
    public function userComment(Request $request, Movie $movie)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);

        $user_comment = $request->all();
        UserComment::create($user_comment);

        return redirect()->route('website.movieDetails', ['movie' => $movie->id]);
    }
    

    // Show Users Comments for each Movie
    public function showComment(Movie $movie)
    {
        $comments = UserComment::where('movie_id', $movie->id)->get();
        return view('website.movieDetails', ['x' => $comments, 'movie' => $movie]);
    }
    
    
    


}
