<div class="container mt-4">
<?php
setcookie('user', $user['login'], time() - 300, "/");
header('Location: index.php');
?>
</div>