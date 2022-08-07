<div class="container mt-4">
<?php 
require 'style.php'; 
require 'cookie.php';

if (!empty($_POST['login']) && !empty($_POST['password'])) 
{

$login=filter_var(trim($_POST['login']));
$password=filter_var(trim($_POST['password']));

//$password=md5($password.'ng869f86geDF');

//$db=mysqli_connect('localhost','root','root','RDB') or die("Ошибка: " . mysqli_error($db));
require 'dbcon.php';

$result=$db->query("SELECT * FROM `users` WHERE `login`='$login'");
$user=$result->fetch_assoc();
if(!$user) {
    echo '<h2><font color="red">Такой пользователь не найден.</font></h2>'.'Вернуться к <a href="index.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="authform.php">авторизации</a>.';
    exit();
}
/*if($user['password'] != $password){
    echo '<h2><font color="red">Пароль введён неправильно!</font></h2>'.'Вернуться к <a href="index.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="authform.php">авторизации</a>.';
    exit();
}*/
if (password_verify($password, $user['password'])){
    setcookie('user', $user['login'], time() + 300, "/");
    $db->close();
    header('Location: suc.php');
}
else {
    echo '<h2><font color="red">Пароль введён неправильно!</font></h2>'.'Вернуться к <a href="index.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="authform.php">авторизации</a>.';
    exit();
}
}
else
header('Location: err.php');
?>
</div>