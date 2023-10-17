@extends("layouts.main")

@section("title")Контакты@endsection


@section("content")
    <h1>Contact us:</h1>
    <address>Belarus, Minsk, Lenina, 1</address>
    <p>+14676485698709</p>
    @include('layouts.messages')
    <form method="post" action="{{route('submit')}}">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input type="text" name="name" id='name' class="form-control" placeholder="Введите имя">
        </div>

        <div class="form-group mb-3">
            <label for="email">Почта</label>
            <input type="email" name="email" id='email' class="form-control" placeholder="Введите email">
        </div>

        <div class="form-group mb-3">
            <label for="subject">Тема</label>
            <input type="text" name="subject" id='subject' class="form-control" placeholder="Введите тему">
        </div>

        <div class="form-group mb-3">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
        </div>
        <button class="btn btn-primary mb-3">Отправить</button>
    </form>
@endsection
