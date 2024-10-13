@extends('layouts.main')
@section('content')
    <div class="reports-cards">
        @foreach($reports as $item)
            <div class="reports-card">
                <p class="reports-card-block-p">Номер телефона: {{ $item['number'] }}</h2>
                <p class="reports-card-block-p">Описание: {{ $item['description'] }}</h3>
                <p class='reports-card-block'> Дата: {{ $item->created_at->format('d.m.Y') }}</p>
            </div>
                
        @endforeach
    </div>
@endsection()