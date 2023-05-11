<?php

$name_user = filter_var(trim($_POST['name_user']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$psw = filter_var(trim($_POST['psw']), FILTER_SANITIZE_STRING);


// if(mb_strlen($login) < 5 || mb_strlen($login) > 16){
//     echo 'Длина логина должна быть от 5 до 16 символов';
//     exit();
// }else if(mb_strlen($psw) < 2 || mb_strlen($psw) > 5){
//     echo 'Длина пароля должна быть от 10 до 16 символов';
//     exit();
// } else echo 'jr'

$mysql = new mysqli('localhost', 'root', 'root', 'ROOMLY');
$mysql->query("INSERT INTO `users` (`user_name`, `email`, `password`, `login`) VALUES('$name_user', '$email', '$psw', '$login')");

$mysql->close();

header('Location: ../main/main.php');
?>