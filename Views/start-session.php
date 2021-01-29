<?php

$login = 'Moises';
$br = '<br/>';

$_SESSION['admin'] = $login;

if (isset($_SESSION['admin'])) {
    header('Location:./session.php');
}

// var_dump($_SESSION);

?>