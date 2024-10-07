@extends('layouts.main')
@section('content')
    @foreach($array as $arr)
        
        <p>{{ $arr['title'] }}</p>
    @endforeach
@endsection()