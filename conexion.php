<?php

$link = 'mysql:host=localhost;dbname=bootstrap_colors';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($link,$user,$pass);

    echo 'Conected...!';
    echo '<pre>';
    foreach ($pdo->query('select * from `colors`') as $row) {
        print_r($row);
    }
    echo '</pre>';



} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>