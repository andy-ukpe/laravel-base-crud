{{--
@extends('layout.app')

@section('page_title')
homepage
@endsection

@section('main_section') --}}


<div>
  <h1>Movies List</h1>

    <ul>
      @foreach ($movies ?? '' as $movie)
        <li>{{ $movie->title }}
          <img src="https://www.movieposterdb.com/back-to-the-future-i88763#&gid=1&pid=1" alt="">
          - <a href="{{route('movie.show', $movie->id)}}">Details</a>
          - <a href="{{route('movie.edit', $movie->id)}}">Modify Details</a>
          <form action="{{route('movie.destroy', $movie->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
          </form>
        </li>
      @endforeach
      <a href="{{route('movie.create', $movie)}}">Add new Movie</a>
    </ul>


</div>
{{-- @endsection --}}
