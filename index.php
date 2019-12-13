<?php
include "autoload.php";

use app\Admin;

$user = new Admin();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300i,500&display=swap&subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Polimer Group</title>
</head>

<body>
  <nav class="nav-wrapper green lighten-2 z-depth-2">
    <div class="container">
      <a href="" class="brand-logo"><img src="images/logo/324(без фона)small.png" id="polimer-logo" alt=""></a>
      <a href="" class="sidenav-trigger" data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Прайс<span class="new badge">4</span></a></li>
        <li><a href="#">Контакты </a></li>
        <li><a href="#">О нас</a></li>
      </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-links">
    <li><a href="#">Прайс</a></li>
    <li><a href="#">Контакты </a></li>
    <li><a href="#">О нас</a></li>
  </ul>
  <header class="full-width">
    <div class="carousel carousel-slider">
      <a href="#one!" class="carousel-item"><img src="images/beach.jpeg" alt=""></a>
      <a href="#two!" class="carousel-item"><img src="images/cat.jpg" alt=""></a>
      <a href="#tree!" class="carousel-item"><img src="images/pryt.jpg" alt=""></a>
    </div>
    </div>

  </header>

  <main>
    <section>
      <div class="container">
        <div class="row">

          <div class="col s12 l4 xl4">
              <div class="card">
                <div class="card-image">
                  <img src="images/bag.webp" width="500" height="400">
                  <span class="card-title">Сумка</span>
                </div>
                <div class="card-content">
                  <p>Полистеровая сумка</p>
                </div>
                <div class="card-action">
                  <a href="#">Заказать</a>
                </div>
              </div>
            </div>
            <div class="col s12 l4 xl4">
              <div class="card">
                <div class="card-image">
                  <img src="images/stakan.jpg" width="500" height="400">
                  <span class="card-title">Стакан</span>
                </div>
                <div class="card-content">
                  <p>Картоновый стакан</p>
                </div>
                <div class="card-action">
                  <a href="#">Заказать</a>
                </div>
              </div>
            </div>
            <div class="col s12 l4 xl4">
              <div class="card">
                <div class="card-image">
                  <img src="images/bmwbag.webp" width="500" height="400">
                  <span class="card-title">Пакет</span>
                </div>
                <div class="card-content">
                  <p>Качественные пакеты BMW</p>
                </div>
                <div class="card-action">
                  <a href="#">Заказать</a>
                </div>
              </div>
            </div>

          </div>
        </div>
    </section>

    


  </main>
  <footer class="page-footer green lighten-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Polimer Group</h5>
          <p class="grey-text text-lighten-4">Оптовая и розничная торговля.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <ul></ul>
          <li class="grey-text text-lighten-3"><a tel="0661754266">+38(066)175-42-66</a></li>
          <li class="grey-text text-lighten-3"><a tel="0984685559">+38(098)468-55-59</a></li>
          <li class="grey-text text-lighten-3"><a tel="0676889911">+38(067)688-99-11</a></li>
          <li class="grey-text text-lighten-3"><a tel="0506889991">+38(050)688-99-91</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2019 Copyright
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    $(document).ready(function() {
      // $(".dropdown-trigger").dropdown();
      $('.sidenav').sidenav();
      $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        duration: 500,
      });
    })
  </script>
</body>

</html>