@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('comics.update', $comic->id)}}">
@csrf
@method('PUT')
<div>
    <label for="title">Titolo:</label>
    <input type="text" name="title" value="{{old('title', $comic->title)}}">
    </div>

    <div>
    <label for="description">Descrizione:</label>
    <input type="text" name="description" value="{{old('description', $comic->description)}}">
    </div>

    <div>
    <label for="thumb">Thumb:</label>
    <input type="text" name="thumb" value="{{old('thumb', $comic->thumb)}}">
    </div>

    <div>
    <label for="price">Prezzo:</label>
    <input type="text" name="price" value="{{old('price', $comic->price)}}">
    </div>

    <div>
    <label for="series">Serie:</label>
    <input type="text" name="series" value="{{old('series', $comic->series)}}">
    </div>

    <div>
    <label for="sale_date">Data:</label>
    <input type="date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
    </div>
 
    <div>
    <label for="type">Tipo:</label>
    <input type="text" name="type" value="{{old('type', $comic->type)}}">
    </div>
    <div>
    <input type="submit" value="MODIFICA">
    </div>
</form>