@section("aside")
<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="{{route('home')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Панель</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{route('home')}}" class="nav-link text-white" aria-current="page">
          Главная
        </a>
      </li>
      <li>
        <a href="{{route('about')}}" class="nav-link text-white">
          О нас
        </a>
      </li>
      <li>
        <a href="{{route('contacts')}}" class="nav-link text-white">
          Контакты
        </a>
      </li>
      <li>
        <a href="{{route('contacts-all')}}" class="nav-link text-white">
          Отзывы
        </a>
      </li>
    </ul>
  </div>
