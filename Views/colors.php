<?php
    include_once('./models/conexion.php');

    $sql = 'select * from colors';

    $gsent = $pdo->prepare($sql);
    $gsent->execute();

    $result = $gsent->fetchAll();

    // var_dump($result);

    //Add items

    if ($_POST) {
        $color = $_POST['color'];
        $description = $_POST['description'];
        // echo $color;

        $insert = 'INSERT INTO colors (color,description) VALUES (?,?)';
        $add_sql = $pdo->prepare($insert);
        $add_sql->execute(array($color,$description));
        header('location:colors.php');
    }
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
    <div class="col-sm-6">
        <h2>Add items</h2>
        <form method = "POST">
            <input type="text" class="form-control mb-3" name="color" placeholder="color">
            <input type="text" class="form-control mb-3" name="description" placeholder="description">
            <button class="btn btn-primary">Add item</button>
        </form>
    </div>
</div>