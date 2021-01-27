<?php

$name = 'Moises';
$animals = ['dog','cat','elephant',25, true];

?>
<h1>Hi: <?php echo $name ?></h1>

<p>My favorite animal is: <?php echo $animals[0] ?></p>

<div class="row">
    <div class="col-sm-4">
        <div class="card text-white bg-secondary">
            <div class="card-header">
                <h5 class="card-title">While loop</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <?php
                        $i = 0;
                        while ($i<count($animals)) {
                            echo '<li class="list-group-item bg-secondary">' . $animals[$i] . '</li>';
                            $i++;
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-info">
            <div class="card-header">
                <h5 class="card-title">For loop</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <?php
                        for ($i=0; $i < count($animals); $i++) { 
                            echo '<li class="list-group-item bg-info">' . $animals[$i] . '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-danger">
            <div class="card-header">
                <h5 class="card-title">For Each</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <?php
                        foreach ($animals as $key => $value) {
                            echo '<li class="list-group-item bg-danger">' .$key. '. ' . $value . '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>