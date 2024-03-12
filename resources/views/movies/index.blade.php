@extends('layout.app')


@section('title')
    MoviesLand Dashboard
@endsection

@section('content')


  @if ($message = Session::get('added'))

    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Movie Added Successfully!</h4>
        <hr />
      <p> {{$message}} </p>
    </div>

  @elseif ($message = Session::get('updated'))

    <div class="alert alert-primary" role="alert">
      <h4 class="alert-heading">Movie Updated Successfully!</h4>
        <hr />
      <p> {{$message}} </p>
    </div>

  @elseif ($message = Session::get('delete'))

    <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Movie Deleted Successfully!</h4>
        <hr />
      <p> {{$message}} </p>
    </div>

  @endif

      <div
          class="table-responsive"
      >
          <table
              class="table table-striped table-hover table-borderless table-primary align-middle"
          >
              <thead class="table-light">
                  <caption>
                      Movies
                  </caption>

                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Year</th>
                      <th>Details</th>
                      <th>Category</th>
                      <th>Added By</th>
                      <th>Actions</th>
                  </tr>

              </thead>
              <tbody class="table-group-divider">
                  @foreach ($movies as $movie)
                      <tr class="table-primary">

                          <td scope="row"> {{$movie->id}} </td>
                          <td> {{$movie->name}} </td>
                          <td> {{$movie->year}} </td>
                          <td> {{$movie->details}} </td>
                          <td> {{$movie->category}} </td>
                          <td> {{$movie->user ? $movie->user->name : 'not found'}}  </td>


                          <td>

                            <a class="btn btn-info" href="{{route('movies.edit', $movie->id)}}">Edit</a>
                            <a class="btn btn-info" href="{{route('movies.show', $movie->id)}}">Show</a>


                            <form action="{{route('movies.destroy', $movie->id)}}" method="post">
                              @csrf
                              @method('DELETE')

                                  <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal {{$movie->id}}">
                                      Delete {{$movie->name}}
                                  </button>
                                  
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal {{$movie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel"><span class="badge badge-warning">Warning</span>
                                              You'll delete <span class="badge badge-danger">{{$movie->name}}</span> Movie</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                          </div>
                                          <div class="modal-body">
                                          <h5>Are you sure about that? You will not be able to recover it again.</h5>
                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button class="btn btn-danger" type="submit">Delete</button>
                                          </div>
                                      </div>
                                      </div>
                                  </div>       
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>          
    </div>
    
@endsection