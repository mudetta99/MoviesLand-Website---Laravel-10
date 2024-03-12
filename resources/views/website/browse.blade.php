@extends('website.layout')



@section('title')
    MoviesLand | Browse Movies
@endsection


@section('content')
    <link rel="stylesheet" href=" {{asset('css/browsePage.css')}} ">

<main>

    <div class="search-container">
        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Search...">
            <button class="search-button">Search</button>
        </div>
    
        <div class="options-container">
            <div class="option">
                <label for="quality">Quality:</label>
                <select id="quality">
                    <option value="hd">HD</option>
                    <option value="full-hd">Full HD</option>
                    <option value="4k">4K</option>
                </select>
            </div>
    
            <div class="option">
                <label for="genre">Genre:</label>
                <select id="genre">
                    <option value="action">Action</option>
                    <option value="drama">Drama</option>
                    <option value="comedy">Comedy</option>
                </select>
            </div>
    
            <div class="option">
                <label for="rating">Rating:</label>
                <select id="rating">
                    <option value="5">5+</option>
                    <option value="4">4+</option>
                    <option value="3">3+</option>
                </select>
            </div>
    
            <div class="option">
                <label for="year">Year:</label>
                <select id="year">
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
    
            <div class="option">
                <label for="language">Language:</label>
                <select id="language">
                    <option value="english">English</option>
                    <option value="spanish">Spanish</option>
                </select>
            </div>
    
            <div class="option">
                <label for="orderBy">Order By:</label>
                <select id="orderBy">
                    <option value="latest">Latest</option>
                    <option value="popularity">Popularity</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="movie-container">

        @foreach ($movies as $movie)
            <div class="movie-card">
                <div class="hover-info">
                    <div class="rating" style="color: gold;font-weight:bolder">&#9733;</div>
                    <div class="rating">8.5</div>
                    <div class="category">{{$movie->category}}</div>
                    <button class="btn btn-danger"><a class="movie-details-link" href="{{route('website.movieDetails', $movie->id)}}">View Details</a></button>
                </div>
                <img src="/images/{{$movie->image}}" alt="Movie Poster">
                <div class="movie-details">
                    <div class="movie-title"> {{$movie->name}} </div>
                    <div class="movie-year">{{$movie->year}}</div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="pagination">
    <a href="#" class="page">1</a>
    <a href="#" class="page">2</a>
    <a href="#" class="page">3</a>
    <a href="#" class="page">4</a>
    <a href="#" class="page">5</a>
    <a href="#" class="page">6</a>
    <a href="#" class="page">7</a>
    <a href="#" class="page">8</a>
    <a href="#" class="page">...</a>
    <a href="#" class="page">Next</a>
    </div>
</main>

@endsection