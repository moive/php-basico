<?php
include_once('./models/conexion-pagination.php');

$sql = 'SELECT * FROM articles';
$run_sql = $pdo->prepare($sql);
$run_sql->execute();

$result = $run_sql->fetchAll();
// var_dump($result);

?>

<h2>Pagination</h2>
<?php foreach($result as $article):?>
<div class="alert alert-primary" role="alert">
    <?php echo $article['title']?>
</div>
<?php endforeach ?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>