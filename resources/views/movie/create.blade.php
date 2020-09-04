<h1>Inserisci un nuovo film</h1>

<form action="{{route('movie.store')}}" method="post">
  @csrf
  @method('POST');

  <div>
    <label>Title</label>
    <input type="text" name="title">
  </div>

  <div>
    <label>Year</label>
    <input type="number" name="year">
  </div>

  <div>
    <label>Description</label>
    <textarea name="description" rows="8" cols="80"></textarea>
  </div>

  <div>
    <label>rating</label>
    <input type="text" name="rating">
  </div>

  <div>
    <input type="submit" name="Save">
  </div>

</form>
