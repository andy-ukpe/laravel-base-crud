
@extends('layout.app')


@section('page_title')
Add movie
@endsection


@section('main_section')

<h1>Add new Movie</h1>

<div>
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
</div>

<form action="{{route('movie.store')}}" method="post">
  @csrf
  @method('POST')

  <div>
    <label>Title</label>
    <input type="text" name="title" value="{{old('title')}}">
  </div>

  <div>
    <label>Year</label>
    <input type="number" name="year" value="{{old('year')}}">
  </div>

  <div>
    <label>Description</label>
    <textarea name="description" rows="8" cols="80">{{old('description')}}</textarea>
  </div>

  <div>
    <label>Rating</label>
    <input type="text" name="rating" value="{{old('rating')}}">
  </div>

  <div>
    <input type="submit" name="Save">
  </div>

</form>
@endsection
