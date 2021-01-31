<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

// $data = ['dollar'=>500,'euro'=>600];

// $get = $_GET['currency'];

if($_GET['currency']=='euro' || $_GET['currency']=='dollar'){

    include_once('../models/conexion-api.php');

    $sql = 'SELECT * FROM '.$_GET['currency'];
    $run_sql = $pdo->prepare($sql);
    $run_sql->execute();
    $data = $run_sql->fetchAll();

    // var_dump($sql);
}else {
    echo 'Request not found';
}

echo json_encode($data);

?>