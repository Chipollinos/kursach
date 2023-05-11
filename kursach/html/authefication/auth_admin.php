<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$psw = filter_var(trim($_POST['psw']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', 'root', 'ROOMLY');

$result_admin = $mysql->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$psw'");

$admin = $result_user->fetch_assoc();

if(count($admin) == 0){
    echo 'Такой пользователь не найден';
    exit();
}

setcookie('admin', $admin['login'], time() + 3600, "/");


$mysql->close();

header('Location: ../main/main.php');

?>