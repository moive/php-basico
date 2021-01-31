<?php
session_start();


include_once('../models/conexion.php');

$username_login = $_POST['username'];
$password_login = $_POST['password'];

var_dump($username_login);
var_dump($password_login);

$sql_login = 'SELECT * FROM users WHERE name = ?';
$run_login = $pdo->prepare($sql_login);
$run_login->execute(array($username_login));
$result_login = $run_login->fetch();

var_dump($result_login);

if(!$result_login){
    echo 'User does not exist';
    die();
}

echo 'Verified user';

var_dump($result_login['password']);

if(password_verify($password_login, $result_login['password'])){
    $_SESSION['admin'] = $username_login;
    header('Location:/restricted.php');
}else {
    echo 'Passwords are not the same';
    die();
}


?>