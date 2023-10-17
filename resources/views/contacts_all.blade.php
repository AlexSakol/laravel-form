@extends('layouts.main')

@section('title')Сообщения@endsection

@section('content')
    @foreach ($data as $item)
    <div class="alert alert-info">
        <h3>{{$item->subject}}</h3>
        <h5>{{$item->name}} {{$item->email}}</h5>
        <p>{{$item->message}}</p>
        <p>
        <a href="{{route('edit-message', $item->id)}}">Редактировать</a>
        <a href="{{route('delete-message', $item->id)}}">Удалить</a>
        </p>
    </div>
    @endforeach
@endsection
