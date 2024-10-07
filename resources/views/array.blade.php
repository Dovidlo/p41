<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/style.css'>
    <title>Document</title>
</head>
<body>
    @extends('layouts.main')
    @section('content')
        <div class="cards">
            @foreach($array as $arr)
                <div class="card">
                    <h2>{{ $arr['title'] }}</h2>
                    <img class="card-img" src="{{ $arr['path'] }}" alt="{{ $arr['title'] }}">
                    <p class='card-price'>Цена: {{ $arr['price'] }} рублей</p>
                </div>
                
            @endforeach
        </div>
        
    @endsection()
</body>
</html>