<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food&Fresh</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @viteReactRefresh
    @Vite(['resources/css/app copy.css','resources/css/index.css','resources/js/main.jsx'])
  </head>
  <body>
    <header>
      <div class="header_first">
        <div class="title">
          <div class="name">Food&Fresh<img src="http://127.0.0.1:8000/storage/food 2.svg"></div>
          <div class="action_page">ЛИЧНЫЙ КАБИНЕТ</div>
        </div>
        <div class="auth">
          <a>
            <img src="http://127.0.0.1:8000/storage/icons_auth.svg">
          </a>
        </div>
      </div>
      <!-- <navbar class="header_second">
        <ul class="navbar_list">
          <li>Личные данные</li>
          <li>Избранные</li>
          <li>Адреса</li>
          <li>Способы оплаты</li>
          <li>Мои заказы</li>
        </ul>
      </navbar> -->
    </header>
    <main id="root">
    </main>
    <footer>
      <div class="footer_content">
        <ul class="main_column">
          <li class="main">Food&Fresh<img src="food 2.svg"></li>
          <li><a>г Астана<br> Кабанбай Батыра 8</a></li>
          <ul class="link-list">
            <li><a></a></li>
            <li><a></a></li>
          </ul>
        </ul>
        <ul class="column">
          <li class="main">Company</li>
          <li><a>About Us</a></li>
          <li><a>Career</a></li>
          <li><a>How It Work  </a></li>
        </ul>
        <ul class="column">
          <li class="main">Policy</li>
          <li><a>FAQ</a></li>
          <li><a>Privacy</a></li>
          <li><a>Shipping</a></li>
        </ul>
        <ul class="column">
          <li class="main">Get In Touch</li>
          <li><a>+77076630751</a></li>
          <li><a>iwni@example.com</a></li>
        </ul>
      </div>
      <div class="copyright">© 2024 Food&Fresh ALL RIGHT RESERVED.</div>
    </footer>
  </body>
</html>
