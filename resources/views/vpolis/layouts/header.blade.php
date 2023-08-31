<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">
  <title>Ваш полис - подбор и сравнение вкладов, кредитов, займов, кредитных карт, автострахование, ипотечное страхование, калькулятор ОСАГО, круизы и путешествия, экскурсии, авиабилеты, юридические услуги.</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- theme meta -->
  <meta name="theme-name" content="vpolis" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- plugins -->
  <link rel="stylesheet" href="{{ asset('vpolis/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vpolis/plugins/themify-icons/themify-icons.css') }}">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
  <!-- Main Stylesheet -->
  <link href="{{ asset('vpolis/css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('vpolis/images/favicon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="icon" href="{{ asset('vpolis/images/favicon.ico') }}" type="image/x-icon">

</head>

<body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    body {
        font-family: 'Roboto', sans-serif;
    }
    .icon-circle {
        background-color: #fff;
        transition: all 0.3s ease;
        width: 50px;
        margin: 0 5px;
        height: 50px;
        border-radius: 50px;
        font-size: 15px;
        border: 1px solid #ddd;
        cursor: pointer;
    }
    .icon-circle:hover {
        box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.05);
    }
    .icon-circle:hover i {
        color: rgba(0,0,0,0.9);
    }
    .icon-circle a i {
        color: #ccc;
    }
    a:hover{
    text-decoration:none;    
    }
    .btn-link {
        color: #e34c43;
        transition: all 0.3s ease;
        font-weight: bold;
        font-size: 13px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
    </style>

<header class="sticky-top navigation">
  <div class=container>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <a class=navbar-brand href="{{ route('/') }}"><img class="img-fluid" src="{{ asset('vpolis/images/logo.png') }}" alt="vpolis"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
        <i class="ti-align-right h4 text-dark"></i></button>
      <div class="collapse navbar-collapse text-center" id=navigation>
        <ul class="navbar-nav mx-auto align-items-center">
          <li class="nav-item1"><a class="nav-link" href="{{ route('osago') }}">Автострахование</a></li>
          <li class="nav-item2"><a class="nav-link" href="{{ route('ipoteka') }}">Ипотечное страхование</a></li>
          <li class="nav-item3"><a class="nav-link" href="{{ route('finansi') }}">Финансы и вклады</a></li>
          <li class="nav-item4"><a class="nav-link d-lg-none" href="{{ route('jobs') }}">Вакансии</a></li>
        </ul>
          <!--<div class="dropdown d-lg-block d-none">
              <button class="btn-dropdown" type="button" id="dropdownMenuButton"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-three-dots"></i>
              </button>
              <ul class="dropdown-menu shadow bg-body rounded" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" style="font-size:smaller;" href="#">Юридичесские услуги</a></li>
                  <li><a class="dropdown-item" style="font-size:smaller;" href="#">Все для отдыха</a></li>
                  <li><a class="dropdown-item" style="font-size:smaller;" href="#">Авиабилеты</a></li>
              </ul>
          </div>-->
        <a href="" class="btn btn-sm btn-primary ml-lg-4 text-uppercase" type="button" data-toggle="modal" data-target="#staticBackdrop"><i class="bi bi-geo-alt" style="font-size: 1rem; color: white;"></i>Может на экскурсию?</a>
        <!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="staticBackdropLabel">Cервис онлайн-бронирования экскурсий</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <script src="https://c11.travelpayouts.com/content?trs=241953&shmarker=452210.extripster&nofooter=true&noheader=true&nocobranding=true&powered_by=true&promo_id=3613" charset="utf-8" async charset="utf8"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </nav>
  </div>
</header>
