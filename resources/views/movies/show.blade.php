@extends('layout.app')

<style>
    .movie {
        display: flex;
        gap:25px
    }

    .movie .image {
        margin-top: 25px;
        display: flex
    }

    .badge {
        color: #fff;
    }

    span {
        color: #ff0000;
        font-weight: bolder
    }
</style>

@section('title')
    MoviesLand Dashboard|{{$movie->name}}
@endsection

@section('content')

    <div class="movie">

        <div class="image">
            
            <img src="/images/{{$movie->image}}">
        </div>

        <div class="info">
            <h1>{{$movie->name}}</h1>
            <span class="badge bg-danger"
            @if ($movie->year < 2024)
                hidden
            @endif
            
            >New Release</span>

            <h5><span>Year</span>: {{$movie->year}}</h5>
            <h5><span>Category</span>: {{$movie->category}}</h5>
            <h5><span>Rate</span>: {{$movie->rate}}</h5>
            <hr>
            <span>About Movie:</span>
        
            <h4>{{$movie->details}}</h4>
            <hr>
            @foreach ($users as $user)
                @if ($user->id == $movie->user_id)
                    <h6><span>Added by</span>: {{$user->name}}</h6>
                @endif
                
            @endforeach
            <h6><span>Added at</span>: {{$movie->created_at}}</h6>
            <h6><span>Updated at</span>: {{$movie->updated_at}}</h6>

        </div>
    </div>
    
    
@endsection