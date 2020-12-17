<?php include "exo2-2.php";?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo2</title>
    </head>

    <body>
        <div>
            <?php Tableau("Titre","Titre","Titre") ?>
        </div>
        <div>
            <h1>Base :</h1>
            <?php highlight_file(__FILE__); ?>
            <h1>Fonction :</h1>
            <?php highlight_file("exo2-2.php"); ?>
        </div>
        
    </body>
</html>