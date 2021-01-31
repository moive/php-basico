<?php

include_once('../models/conexion.php');

echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";

$username = $_POST['username'];
$password = $_POST['password'];
$password_again = $_POST['password_again'];
$br = '<br/>';

$password = password_hash($password, PASSWORD_DEFAULT);

var_dump($username);
var_dump($password);
var_dump($password_again);

$sql_verify = 'SELECT * FROM users WHERE name =  ?';
$run_verify = $pdo->prepare($sql_verify);
$run_verify->execute(array($username));
$result = $run_verify->fetch();

var_dump($result);

if($result){
    echo 'There is this user';
    die();
}


if (password_verify($password_again, $password)) {
    echo 'Password is valid!'.$br;

    $sql = 'INSERT INTO users (name, password) VALUES (?,?)';
    $run_sql = $pdo->prepare($sql);

    if ($run_sql->execute(array($username, $password))) {
        echo 'Added'.$br;
    } else {
        echo 'Error'.$br;
    }
    

} else {
    echo 'Invalid password.';
}


?>