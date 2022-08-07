<title>Авторизация</title>
<?php require 'style.php';
require 'cookie.php'; ?>
<div class="container mt-4">
    <form action="auth.php" method='post'>
        <input type="text" class='form-control' name='login' id='login' placeholder='Введите логин'>
        <br>
        <input type="text" class='form-control' name='password' id='password' placeholder='Введите пароль'>
        <br>
        <button class='btn btn-success' type='submit'>Авторизация</button>
        <br><br>
        <p>Ещё не зарегистрированы? Нажмите <a href='index.php'>здесь</a> для регистрации.</p>
    </form>
</div>