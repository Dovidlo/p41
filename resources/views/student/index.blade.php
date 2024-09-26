@extends('layouts.main')
@section('content')
    <h1>Список студентов</h1>
    @foreach($students as $student)
        <p>{{ $student->lname }}</p>
    @endforeach
@endsection()