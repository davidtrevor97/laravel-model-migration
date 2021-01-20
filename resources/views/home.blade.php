<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
    <ul>
        @foreach($cars as $car)
         <li>
            <h1>{{$car->marca}}</h1>
            <h1>{{$car->modello}}</h1>
            <h1>{{$car->id}}</h1>
            <h1>{{$car->targa}}</h1>           
        </li>
        @endforeach
    </ul>
    </body>
</html>
