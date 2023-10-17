@extends("layouts.main")

@section("title")Редактировать сообщение@endsection


@section("content")
    <form method="post" action="{{route('edit-message-submit', $message->id)}}">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input type="text" name="name" id='name' class="form-control" placeholder="Введите имя"
            value='{{$message->name}}'>
        </div>

        <div class="form-group mb-3">
            <label for="email">Почта</label>
            <input type="email" name="email" id='email' class="form-control" placeholder="Введите email"
            value='{{$message->email}}'>
        </div>

        <div class="form-group mb-3">
            <label for="subject">Тема</label>
            <input type="text" name="subject" id='subject' class="form-control" placeholder="Введите тему"
            value='{{$message->subject}}'>
        </div>

        <div class="form-group mb-3">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Сообщение">{{$message->message}}</textarea>
        </div>
        <button class="btn btn-primary mb-3">Отправить</button>
    </form>
@endsection
