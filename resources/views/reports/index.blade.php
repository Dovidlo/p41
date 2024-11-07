@extends('layouts.main')
@section('content')
<div class="reports-cards">

    @foreach($reports as $item)
    <div class="reports-card">
        <div class="reports-card-container">
            <p class='reports-card-block data'>{{ $item['created_at']->format('d.m.Y') }}</p>
            <p class="reports-card-block number">{{ $item['number'] }}</h2>
        </div>
        <p class="reports-card-block">Описание: {{ $item['description'] }}</h3>
    </div>

    <form method="POST" action="{{route('reports.destroy', $item->id)}}">
        @method('delete')
        @csrf
        <input type="submit" value="Удалить">
    </form>
    @endforeach

    <form class="formAdd" method="POST" action="{{route('reports.store')}}">
        @csrf
        <div class="formAddBox">
            <div class="formAddBox_el">
                <label for="number" class="formAddBox_el_inp">Номер авто</label>
                <input type="text" id="number" name="number" class="formAddBox_el_inp" placeholder="А777АА 777" required />
            </div>
            <div class="formAddBox_el">
                <label for="description" class="formAddBox_el_inp">Описание</label>
                <input type="text" id="description" name="description" class="formAddBox_el_inp" cols="30" rows="10" placeholder="Описание" />
            </div>
        </div>
        <button type="submit" class="formAdd_bt">Создать</button>
    </form>

</div>

@endsection