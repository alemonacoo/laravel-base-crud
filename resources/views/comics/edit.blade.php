<form method="POST" action="{{route('comics.update', $comic->id)}}">
@csrf
@method('PUT')
<div>
    <label for="title">Titolo:</label>
    <input type="text" name="title" value="{{$comic->title}}">
    </div>

    <div>
    <label for="description">Descrizione:</label>
    <input type="text" name="description" value="{{$comic->description}}">
    </div>

    <div>
    <label for="thumb">Thumb:</label>
    <input type="text" name="thumb" value="{{$comic->thumb}}">
    </div>

    <div>
    <label for="price">Prezzo:</label>
    <input type="number" name="price" value="{{$comic->price}}">
    </div>

    <div>
    <label for="series">Serie:</label>
    <input type="text" name="series" value="{{$comic->series}}">
    </div>

    <div>
    <label for="sale_date">Data:</label>
    <input type="date" name="sale_date" value="{{$comic->sale_date}}">
    </div>
 
    <div>
    <label for="type">Tipo:</label>
    <input type="text" name="type" value="{{$comic->type}}">
    </div>
    <div>
    <input type="submit" value="MODIFICA">
    </div>
</form>