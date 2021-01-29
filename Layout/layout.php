<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
        <title>Php Basico</title>
    </head>
    <body>
        <?php include_once('header.php'); ?>
        <main class="container mt-5">
            <?php include_once('./Routing/routing.php'); ?>
        </main>
        <?php include_once('footer.php'); ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script>
            $(function(){
                $(".alert .run").each(function(){
                    $(this).on("click", function(){
                        var id = $(this).attr("data-id");
                        console.log(id)
                        $(".active-popup").click();

                        var href = "/models/delete.php?id=";
                        idHref = href + id;
                        $(".btn-delete").attr("href",idHref);
                    });
                });
            });
        </script>
    </body>
</html>