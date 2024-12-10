<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Food&Fresh</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @viteReactRefresh 
        @Vite(['resources/css/menu.css','resources/js/menu.jsx'])
    </head>
    <body>
        <header>
          <div class="logo">Food&Fresh<img src="/storage/food 2.svg"/></div>
          <ul class="navbar">
            <li><a>Home</a></li>
            <li><a>Menu</a></li>
            <li><a>How It Work </a></li>
            <li><a>About</a></li>
            <li><a>Contact</a></li>
          </ul>
          <button class="auth-link"><a href={{route('signin')}}>Sign in</a></button>
        </header>
        <main id="root"></main>
        <footer>
            <div class="footer_content">
                <ul class="main_column">
                  <li class="main">Food&Fresh<img src="/storage/food 2.svg"></li>
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