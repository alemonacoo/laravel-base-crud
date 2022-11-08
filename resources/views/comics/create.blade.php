<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Pasta</title>
</head>
<body>
    <div>
        <form action="">
            <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title">
            </div>

            <div>
            <label for="description">Descrizione:</label>
            <input type="text" name="description">
            </div>
    
            <div>
            <label for="thumb">Thumb:</label>
            <input type="text" name="thumb">
            </div>

            <div>
            <label for="price">Prezzo:</label>
            <input type="number" name="price">
            </div>

            <div>
            <label for="series">Serie:</label>
            <input type="text" name="series">
            </div>

            <div>
            <label for="sale_date">Data:</label>
            <input type="date" name="sale_date">
            </div>
         
            <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type">
            </div>
        </form>

        <hr>
        <a href="{{route('comics.index')}}">BACK</a>
        <hr>

    </div>
</body>
</html>