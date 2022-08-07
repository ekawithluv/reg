<div class="container mt-4">
<?php
require 'style.php';
require 'cookie.php';

if (!empty($_POST['login']) && !empty($_POST['password'])) 
{

$login=filter_var(trim($_POST['login']));
$password=filter_var(trim($_POST['password']));

if(mb_strlen($login)<1||mb_strlen($login)>15) {
    echo 'Допустимая длина логина: 1-15 символов.'.'<br>'.'Вернуться к <a href="index.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="authform.php">авторизации</a>.';
    exit();
} else if (mb_strlen($password)<1||mb_strlen($password)>15) {
    echo 'Допустимая длина пароля: 1-15 символов.'.'<br>'.'Вернуться к <a href="index.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="authform.php">авторизации</a>.';
    exit();
}

//$password=md5($password.'ng869f86geDF');
$password=password_hash($password, PASSWORD_DEFAULT);

$db=new mysqli('localhost','root','root','RDB');

$result=$db->query("SELECT * FROM `users` WHERE `login`='$login'");
$user=$result->fetch_assoc();
if($user) {
    echo '<h2><font color="red">Такой пользователь уже зарегистрирован.</font></h2>'.'Вернуться к <a href="index.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="authform.php">авторизации</a>.';
    exit();
}

$db->query("INSERT INTO `users` (`login`, `password`) 
VALUES('$login', '$password')");

$db->close();

header('Location: regsuc.php');
}
else {
header('Location: err.php');}
?>
</div>