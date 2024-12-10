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
        <form method="post" action={{ route('signup.post') }}>
            @csrf
            <div class="title">Регистрация</div>
            <label>Логин</label>
            <input type="text" required placeholder="Введите почту" name="login" class="input-form"/>
            <label>Почта</label>
            <input type="text" required placeholder="Введите почту" name="email" class="input-form"/>
            <label>Пароль</label>
            <input type="password" required placeholder="Введите пароль" name="password" class="input-form"/>
            <input type="submit" value="Войти">
        </form>
    </body>
</html>