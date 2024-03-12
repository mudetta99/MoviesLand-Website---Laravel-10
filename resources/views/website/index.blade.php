@extends('website.layout')

@section('title')
    MoviesLand
@endsection

@section('content')

<div class="hero-section">
    <p class="hero-section-head">Download MoviesLand movies: HD smallest size</p>
    <p>Welcome to the official MoviesLand website. Here you can browse and download movies in excellent 720p, 1080p, 2160p 4K and 3D quality, all at the smallest file size. MoviesLand Torrents.</p>
    <p>IMPORTANT - MoviesLand is the only new official domain for movies</p>
</div>

<main>
        <h1 class="new-movies">&#127775;Newest Movies&#127775;</h1>
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

        <h1 class="upcoming-movies">&#127775;Upcoming Movies&#127775;</h1>
            <div class="movie-container">
                @foreach ($upcomingMovies as $movie)
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
</main>

@endsection