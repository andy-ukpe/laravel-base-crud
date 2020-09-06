
@extends('layout.app')


@section('page_title')
Modify Details
@endsection


@section('main_section')
<h1>Modify Details: {{$movie->title}}</h1>
<div class="">
  <form action="{{route('movie.update', $movie->id)}}" method="post">
    @csrf
    @method('PUT')

    <div>
      <label>Title</label>
      <input type="text" name="title" value="{{old('title') ? old('title') : $movie->title}}">
    </div>

    <div>
      <label>Year</label>
      <input type="number" name="year" value="{{old('year') ? old('year') : $movie->year}}">
    </div>

    <div>
      <label>Description</label>
      <textarea name="description" rows="8" cols="80">{{old('description') ? old('description') : $movie->description}}</textarea>
    </div>

    <div>
      <label>Rating</label>
      <input type="text" name="rating" value="{{old('rating') ? old('rating') : $movie->rating}}">
    </div>

    <div>
      <input type="submit" name="Save">
    </div>

  </form>
</div>
@endsection
