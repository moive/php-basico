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

    if($_GET){
        $id=$_GET['id'];
        $sql_unique = 'SELECT * FROM colors WHERE id=?';
        $run_unique = $pdo->prepare($sql_unique);
        $run_unique->execute(array($id));
        $result_unique = $run_unique->fetch();

        // var_dump($result_unique);
    }
?>

<div class="row">
    <div class="col-sm-6">
        <?php foreach ($result as $value): ?>
            <div class="alert alert-<?php echo $value['color'] ?>" role="alert">
                <span class="text-uppercase"><?php echo $value['color'] ?></span>
                -
                <span><?php echo $value['description'] ?></span>
                <a 
                    href="/colors?id=<?php echo $value['id'] ?>" 
                    class="float-right"
                >
                    <i class="fas fa-pencil-alt"></i>
                </a>

            </div>
        <?php endforeach ?>
    </div>
    <div class="col-sm-6">
        <?php if(!$_GET): ?>
        <h2>Add item</h2>
        <form method = "POST">
            <input type="text" class="form-control mb-3" name="color" placeholder="color">
            <input type="text" class="form-control mb-3" name="description" placeholder="description">
            <button class="btn btn-primary">Add item</button>
        </form>
        <?php endif ?>

        <?php if($_GET): ?>
        <h2>Edit item</h2>
        <form method = "GET" action="./models/edit-color.php">
            <input type="hidden" name="id" value="<?php echo $result_unique['id']; ?>">
            <input type="text" class="form-control mb-3" name="color" placeholder="color" value="<?php echo $result_unique['color']; ?>">
            <input type="text" class="form-control mb-3" name="description" placeholder="description" value="<?php echo $result_unique['description']; ?>">
            <button class="btn btn-primary">Save</button>
        </form>
        <?php endif ?>
    </div>
</div>