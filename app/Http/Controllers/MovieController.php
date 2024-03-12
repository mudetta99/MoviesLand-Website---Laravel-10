<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;

class MovieController extends Controller
{

    // Display a listing of all movies
    public function index()
    {
        // Page Title
        $page_title = 'index';
        $moviesFromDb = Movie::all();
        return view('movies.index', ['movies' => $moviesFromDb, 'page' => $page_title]);
    }
    

    // Show the form for creating a new movie
    public function create()
    {
        // Page Title
        $page_title = 'create';
        $users = User::all();     
        return view('movies.create', ['users' => $users, 'page' => $page_title]);
    }
    

    // Show the form for editing a specific movie
    public function edit(Movie $movie)
    {   
        // Page Title
        $page_title = 'edit';
        $singleMovieFromDb = Movie::find($movie);
        $users = User::all();
        return view('movies.edit', ['movie' => $movie,'users' => $users, 'page' => $page_title]);
    } 
    

    // Store Movie Data in the Database
    public function store(Request $request)
    {
    $request->validate([
        'name' => ['required', 'min:3'],
        'year' => ['required'],
        'details' => ['required'],
        'user_id' => ['required', 'exists:users,id'],
        'category' => ['required'],
        'image' => ['required'],
        'upcoming' => ['required'],
        'rate' => ['required'],
    ]);

    $movieData = $request->all();

    // Handle image upload
    if ($image = $request->file('image')) {
        $destination = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destination, $profileImage);
        $movieData['image'] = $profileImage;
    }

    // Create the movie
    Movie::create($movieData);

    return redirect()->route('movies.index')->with('added', $movieData['name'] . ' Movie Added Successfully');
    }
    


    // Show the specified movie details
    public function show(Movie $movie)
    {   
        $page_title = 'show';
        $user_name = User::all();
        return view('movies.show', ['movie' => $movie, 'users' => $user_name, 'page' => $page_title]);
    }
    

    // Update the specified movie details
    public function update(Request $request,Movie $movie)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'year' => ['required'],
            'details' => ['required'],
            'user_id' => ['required', 'exists:users,id'],
            'category' => ['required'],
            'upcoming' => ['required'], 
            'rate' => ['required'],
        ]);
    
        $movieData = $request->all();
    
        // Handle image upload
        if ($image = $request -> file('image')) {
            $destination = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image -> move($destination, $profileImage);
            $movieData['image'] = $profileImage;
        }else {
            unset($movieData['image']);
        }

        $movie->update($movieData);
        return redirect()->route('movies.index')->with('updated', $movieData['name'] . ' Movie Updated Successfully');
        
    }
    

    // Delete the specified movie 
    public function destroy($movieId)
    {
        $movie = Movie::find($movieId);
        $movieName = $movie -> name;
        $movie -> delete();

        return to_route('movies.index')
            ->with('delete', $movieName . ' Movie Deleted Successfully');
    }
    
}
