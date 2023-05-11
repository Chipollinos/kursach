<?php

setcookie('admin', $admin['login'], time() - 3600, "/");

header('Location: ../main/main.php');
?>