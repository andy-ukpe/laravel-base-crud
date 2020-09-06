
@extends('layout.app')

@section('page_title')
homepage
@endsection

@section('main_section')

<h1>{{ $movie->title }}</h1>
<ul>
  <li>{{ $movie->year }}</li>
  <li>{{ $movie->description }}</li>
  <li>{{ $movie->rating }}</li>
</ul>

<a href="{{route('movie.index')}}">Back to index</a>

@endsection
