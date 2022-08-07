<title>Регистрация</title>
<?php require 'style.php'; 
require 'cookie.php';?>
<div class="container mt-4">
    <form action="check.php" method='post'>
        <input type="text" class='form-control' name='login' id='login' placeholder='Введите логин'>
        <br>
        <input type="text" class='form-control' name='password' id='password' placeholder='Введите пароль'>
        <br>
        <button class='btn btn-success' type='submit'>Регистрация</button>
        <br><br>
        <p>Уже зарегистрированы? Нажмите <a href='authform.php'>здесь</a> для авторизации.</p>
    </form>
</div>