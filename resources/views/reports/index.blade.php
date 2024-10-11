@extends('layouts.main')
@section('content')
    <div class="cards">
        @foreach($reports as $item)
            <div class="card">
                <h2>{{ $item['number'] }}</h2>
                <h3>{{ $item['description'] }}</h3>
                <p class='card-price'>{{ $item['timestamps'] }}</p>
            </div>
                
        @endforeach
    </div>
@endsection()