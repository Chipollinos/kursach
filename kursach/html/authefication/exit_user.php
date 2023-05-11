<?php

setcookie('user', $user['user_name'], time() - 3600, "/");

header('Location: ../main/main.php');
?>