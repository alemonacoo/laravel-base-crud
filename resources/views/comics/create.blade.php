<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Pasta</title>
</head>
<body>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <div>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" value="{{old('title', '')}}">
            @error('title')
                <span class="is-invalid">&#9587; -- <strong>{{__('Errore nel titolo')}}</strong></span>
            @enderror
            </div>

            <div>
            <label for="description">Descrizione:</label>
            <input type="text" name="description" value="{{old("description", '')}}">
            @error('description')
            <span class="is-invalid">&#9587; -- <strong>{{__('Errore nella descrizione')}}</strong></span>
            @enderror
            </div>
    
            <div>
            <label for="thumb">Thumb:</label>
            <input type="text" name="thumb" value="{{old("thumb", '')}}">
            @error('thumb')
            <span class="is-invalid">&#9587; -- <strong>{{__('Errore nella thumb')}}</strong></span>
            @enderror
            </div>

            <div>
            <label for="price">Prezzo:</label>
            <input type="text" name="price" value="{{old("price", '')}}">
            @error('price')
            <span class="is-invalid">&#9587; -- <strong>{{__('Errore nell prezzo')}}</strong></span>
            @enderror
            </div>

            <div>
            <label for="series">Serie:</label>
            <input type="text" name="series" value="{{old("series", '')}}">
            @error('series')
            <span class="is-invalid">&#9587; -- <strong>{{__('Errore nella serie')}}</strong></span>
            @enderror
            </div>

            <div>
            <label for="sale_date">Data:</label>
            <input type="date" name="sale_date" value="{{old("sale_date", '')}}">
            @error('sale_date')
            <span class="is-invalid">&#9587; -- <strong>{{__('Errore nella data')}}</strong></span>
            @enderror
            </div>
         
            <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" value="{{old("type", '')}}">
            @error('type')
            <span class="is-invalid">&#9587; -- <strong>{{__('Errore nel tipo')}}</strong></span>
            @enderror
            </div>
            <div>
            <input type="submit" value="Invia">
            </div>
        </form>

        <hr>
        <a href="{{route('comics.index')}}">BACK</a>
        <hr>

    </div>
    <style type="text/css">
        .is-invalid{
            color: red;
        }
    </style>
</body>
</html>