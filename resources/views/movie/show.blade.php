<h1>{{ $movie->title }}</h1>
<ul>
  <li>{{ $movie->year }}</li>
  <li>{{ $movie->description }}</li>
  <li>{{ $movie->rating }}</li>
</ul>

<a href="{{route('movie.index')}}">torna a index</a>
