<?php
include_once('./models/conexion-pagination.php');

$sql = 'SELECT * FROM articles';
$run_sql = $pdo->prepare($sql);
$run_sql->execute();
$br = '<br/>';
$result = $run_sql->fetchAll();
// var_dump($result);

$itemPerPage = 3;

$totalItems = $run_sql->rowCount();

$page = ceil($totalItems/3);

// echo $page.$br;
if(!isset($_GET['page'])){
    header('Location:/pagination.php?page=1');
}

if($_GET['page']>$page || $_GET['page']<=0){
    header('Location:/pagination.php?page=1');
}

$init = ($_GET['page']-1)*$itemPerPage;

$sql_articles = 'SELECT * FROM articles LIMIT :initialize,:item_per_page';
$run_select_articles = $pdo->prepare($sql_articles);
$run_select_articles->bindParam(':initialize', $init, PDO::PARAM_INT);
$run_select_articles->bindParam(':item_per_page', $itemPerPage, PDO::PARAM_INT);
$run_select_articles->execute();

$result_select_items = $run_select_articles->fetchAll();


?>

<h2>Pagination</h2>
<?php foreach($result_select_items as $item):?>
<div class="alert alert-primary" role="alert">
    <?php echo $item['title']?>
</div>
<?php endforeach ?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item <?php echo $_GET['page'] <= 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?php echo $_GET['page'] - 1; ?>">Previous</a>
        </li>
        <?php for($i=0; $i<$page; $i++): ?>
        <li class="page-item <?php echo $_GET['page'] == $i+1 ? 'active' : '' ?>">
            <a class="page-link" href="?page=<?php echo $i + 1; ?>"><?php echo $i + 1;?></a>
        </li>
        <?php endfor ?>
        <li class="page-item <?php echo $_GET['page'] >= $page ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?php echo $_GET['page'] + 1; ?>">Next</a>
        </li>
    </ul>
</nav>