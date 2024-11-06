@extends('layouts.main')
@section('content')
    <form class="formAdd" method="POST" action="{{route('report.update', $report->id)}}">
        @csrf
        @method('put')
        <div class="formAddBox">
            <div class="formAddBox_el">
                <label for="number" class="formAddBox_el_inp">Номер авто</label>
                <input type="text"  id="number" name="number" class="formAddBox_el_inp" placeholder="А777АА 777" required />
            </div>
            <div class="formAddBox_el">
                <label for="description" class="formAddBox_el_inp">Описание</label>
                <input type="text"  id="description" name="description" class="formAddBox_el_inp" cols="30" rows="10" name="description">value="{{ $report->description }}"</input>
            </div>
        </div>
        <button type="submit" class="formAdd_bt">Обновить</button>
    </form>
@endsection