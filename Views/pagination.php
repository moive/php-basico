<?php
include_once('./models/conexion-pagination.php');

$sql = 'SELECT * FROM articles';
$run_sql = $pdo->prepare($sql);
$run_sql->execute();

$result = $run_sql->fetchAll();
// var_dump($result);

$itemPerPage = 3;

$totalItems = $run_sql->rowCount();

$page = ceil($totalItems/3);

echo $page;

?>

<h2>Pagination</h2>
<?php foreach($result as $article):?>
<div class="alert alert-primary" role="alert">
    <?php echo $article['title']?>
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