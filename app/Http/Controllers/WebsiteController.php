<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Movie;
use App\Models\User;
use App\Models\UserComment;
use App\Models\UserRegister;

class WebsiteController extends Controller
{

    // Display the main index page with a list of all movies
    public function index()
    {
        $pageTitle = 'index';
        $moviesForYear2024 = Movie::where('year', 2024)->take(5)->get();
        $upcomingMovies = Movie::where('upcoming', 1)->take(5)->get();
    
        return view('website.index', ['movies' => $moviesForYear2024, 'upcomingMovies' => $upcomingMovies, 'page' => $pageTitle]);
    }


    // Display the details of a specific movie with related movies
    public function movieDetails(Movie $movie)
    {
        $pageTitle = 'movieDetails';
        $relatedMovies = Movie::where(function ($query) use ($movie) {
                $categories = explode('/', $movie->category);
                foreach ($categories as $category) {
                    $query->orWhere('category', 'like', "%$category%");
                }
            })
            ->where('id', '!=', $movie->id) 
            ->inRandomOrder() 
            ->limit(4) 
            ->get();
    
        return view('website.movieDetails', [
            'movie' => $movie,
            'relatedMovies' => $relatedMovies,
            'page' => 'movieDetails'
        ]);
    }


    // Display a page with a list of all movies
    public function browse()
    {
        $pageTitle = 'browse';
        $allMovies = Movie::all();
        return view('website.browse', ['movies' => $allMovies, 'page' => $pageTitle]);
    }
    

    // Display a page with a list of 4K movies
    public function fourkMovies()
    {
        $pageTitle = 'fourkMovies';
        $fourkMovies = Movie::where('is_4k', 1)->get();
        return view('website.4k', ['movies' => $fourkMovies, 'page' => $pageTitle]);
    }
    

    // Display a page with a list of trending movies
    public function trending()
    {
        $pageTitle = 'trending';

        $trending = Movie::where('trending', 1)->get();
        return view('website.trending', ['movies' => $trending, 'page' => $pageTitle]);
    }
    

    // Display a page with a list of suggested movies
    public function suggest()
    {
        $pageTitle = 'suggestion';
        $suggest = Movie::where('suggest', 1)->get();
        return view('website.suggest', ['movies' => $suggest, 'page' => $pageTitle]);
    }
    

    // Display the bookmarks page
    public function bookmarks()
    {
        $pageTitle = 'bookmarks';
        return view('website.bookmarks', ['page' => $pageTitle]);
    }
    

    // Display the user registration page
    public function register()
    {
        $pageTitle = 'register';
        return view('website.register', ['page' => $pageTitle]);
    }
    

    // Process user registration form submission
    public function user_registers(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_registers',
            'password' => 'required|min:8',
        ], [
            'email.unique' => 'The email address is already taken.',
            'password.min' => 'The password must be at least 8 characters.',
        ]);

        $user_register = $request->all();

        $user_register['password'] = Hash::make($request->input('password'));

        UserRegister::create($user_register);

        return redirect()->route('website.index');
    }
    

    // Display the login page
    public function login()
    {
        $pageTitle = 'login';
        return view('website.login', ['page' => $pageTitle]);
    }
    

    // Add a new user
    public function addNewUser(Request $request) 
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['reuqired'],
            'password' => ['required']
        ]);


        $userRegister = $request -> all();

        Movie::create($userRegister);

        return to_route('website.index');

    }


    // Display comments for a specific movie
    public function showComment(Movie $movie)
    {
        $comments = UserComment::all();
        return view('website.movieDetails', ['comments' => $comments]);
    }
    
}
