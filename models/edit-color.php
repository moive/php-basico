<?php

include_once('conexion.php');

if ($_GET) {
    $id = $_GET['id'];
    $color = $_GET['color'];
    $description = $_GET['description'];
    $br = '<br/>';
    
    echo $id.$br;
    echo $color.$br;
    echo $description;
}



$sql_edit = 'UPDATE colors SET color=?,description=? WHERE id=?';
$run_edit = $pdo->prepare($sql_edit);
$run_edit->execute(array($color,$description,$id));

header('location:/colors.php')

?>