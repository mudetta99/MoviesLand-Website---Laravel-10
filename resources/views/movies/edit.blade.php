@extends('layout.app')


@section('title')
    MoviesLand Dashboard|Edit {{$movie->name}} Movie
@endsection

@section('content')

    <div class="container">
        <form action="{{route('movies.update', $movie->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Movie Name</label>
                <input type="text" class="form-control" name="name" value="{{$movie->name}}"/>
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Year</label>
                <input type="text" class="form-control" name="year" value="{{$movie->year}}"/>
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Category</label>
                <input type="text" class="form-control" name="category" value="{{$movie->category}}"/>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Details</label>
                <textarea class="form-control" name="details" id="" rows="3">{{$movie->details}}</textarea>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Rate</label>
                <input type="text" class="form-control" name="rate" value="{{$movie->rate}}" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Upcoming</label>
                <input type="text" class="form-control" name="upcoming" value="{{$movie->upcoming}}" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">4K</label>
                <input type="text" class="form-control" name="is_4k" value="{{$movie->is_4k}}" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Trending</label>
                <input type="text" class="form-control" name="trending" value="{{$movie->trending}}" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Suggest</label>
                <input type="text" class="form-control" name="suggest" value="{{$movie->suggest}}" />
            </div>
        
            <div class="mb-3">
                <label for="" class="form-label">Movie Image</label>
                <img src="/images/{{$movie->image}}" alt="{{$movie->name}}" width="150px">
                <input type="file" class="form-control" value="{{$movie->image}}"/>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Added By</label>
                <select class="form-select form-select-lg" name="user_id">

                    <option selected>Select one</option>
                    @foreach ($users as $user)        
                        <option value="{{$user->id}}" @selected($user->id = $movie->id)>{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>

        </form>
    </div>
    
@endsection