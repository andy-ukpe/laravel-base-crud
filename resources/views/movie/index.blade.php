{{-- create a foreach for show the various film --}}

<div>
  <h1>La lista dei film</h1>
    <ul>
      @foreach ($movies as $movie)
        <li>{{ $movie->title }} - <a href="{{route('movie.show', $movie->id)}}">Dettagli</a> </li>
      @endforeach
    </ul>


</div>
