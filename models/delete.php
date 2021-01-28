<?php
include_once 'conexion.php';

$id = $_GET['id'];

$sql_delete = 'DELETE FROM colors  WHERE id=?';
$run_delete = $pdo->prepare($sql_delete);
$run_delete->execute(array($id));

//close conexion
$run_delete = null;
$pdo = null;

header('location:/colors.php');

?>