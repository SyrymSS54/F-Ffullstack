<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type">
        <meta charset="utf-8">
        <meta content="text/html">
        <title>Food&Fresh</title>
        @Vite(['resources/css/auth.css'])
    </head>
    <body>
        <form method="post" action={{ route('signin.post') }}>
            @csrf
            <div class="title">Вход</div>
            <label>Логин</label>
            <input type="text" required placeholder="Введите ваш логин" name="login" class="input-form"/>
            <label>Пароль</label>
            <input type="password" required placeholder="Введите пароль" name="password" class="input-form"/>
            <a class="link-input">Забыли пароль?</a>
            <input type="submit" value="Войти">
            <div class="or">или</div>
            <a href={{ route('signup') }} class="register-link register">Зарегистрироваться</a>
        </form>
    </body>
</html>