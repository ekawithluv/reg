<?php require 'style.php' ?>
<div class="container mt-4">
<?php if(isset($_COOKIE['user']) == '') {
    header('Location: err.php');}
else ?>
    <h2><font color='green'>Вы авторизованы как <?=$_COOKIE['user']?>!</font></h2>
    <form action="exit.php">
        <button class='btn btn-success'>Выход</button>
    </form>     
</div>