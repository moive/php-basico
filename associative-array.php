<?php
    $city[0] = [
        'name'=> 'Lima',
        'population'=>'8 574 974'
    ];
    $city[1] = [
        'name'=> 'Arequipa',
        'population'=>'1 008 290'
    ];
    $city[2] = [
        'name'=> 'Callao',
        'population'=>'994 494'
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Php</title>
</head>
<body>
    <main class="container">
        <h1>Cities</h1>

        <p><?php echo $city[1]['name'] ?></p>

        <div class="row">
            <div class="col-sm-4">
                <div class="card text-white bg-secondary">
                    <div class="card-header">
                        <h5 class="card-title">Cities - for loop</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <?php
                                for ($i=0; $i<count($city); $i++) {
                                    echo '<li class="list-group-item bg-secondary">' . $city[$i]['name'] . ' - ' . $city[$i]['population'] . '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-white bg-primary">
                    <div class="card-header">
                        <h5 class="card-title">Cities - forEach loop</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <?php
                                forEach ($city as $valor) {
                                    echo '<li class="list-group-item bg-primary">' . $valor['name'] . ' - ' . $valor['population'] . '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>