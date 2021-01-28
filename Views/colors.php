<?php
    include_once('./models/conexion.php');

    $sql = 'select * from colors';

    $gsent = $pdo->prepare($sql);
    $gsent->execute();

    $result = $gsent->fetchAll();

    // var_dump($result);
?>

<div class="row">
    <div class="col-sm-6">
        <?php foreach ($result as $value): ?>
            <div class="alert alert-<?php echo $value['color'] ?>" role="alert">
                <span class="text-uppercase"><?php echo $value['color'] ?></span>
                -
                <span><?php echo $value['description'] ?></span>
                

            </div>
        <?php endforeach ?>
    </div>
</div>