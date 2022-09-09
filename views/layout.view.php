<!DOCTYPE html>

<?php
    if(!isset($view_bag['title'])) {
        $title = '...';
    } else {
        $title = $view_bag['title'];
    }
?>

<html>
    <head>
        <title><?= $title ?></title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>QR Code 3000</h1>
        <h2><?= $title ?></h2>

        <div>

            <!-- content -->
            <?php 
                require("$name.view.php");
            ?>

        </div>

        <p>By Thunder Mustard</p>
    </body>
</html>