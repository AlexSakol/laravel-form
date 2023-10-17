@section("header")
<header class="container">
<div class = "row">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Laravel-form</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts-all')}}">Отзывы</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
</header>