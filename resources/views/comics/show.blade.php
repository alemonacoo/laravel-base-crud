<div>{{$comic['title']}}</div>
<div>{{$comic['description']}}</div>
<div>{{$comic['price']}}</div>
<div>{{$comic['series']}}</div>

<hr>
<a href="{{route('comics.index')}}">BACK</a>
<a href="{{route('comics.edit', $comic->id)}}">MODIFICA</a>
<hr>
<form method="POST" action="{{route('comics.destroy', $comic['id'])}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="cancella">
</form>
<hr>

