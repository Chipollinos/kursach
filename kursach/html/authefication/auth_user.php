<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$psw = filter_var(trim($_POST['psw']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', 'root', 'ROOMLY');

$result_user = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$psw'");

$user = $result_user->fetch_assoc();

if(count($user) == 0){
    echo 'Такой пользователь не найден';
    exit();
}

setcookie('user', $user['user_name'], time() + 3600, "/");


$mysql->close();

header('Location: ../main/main.php');

?>