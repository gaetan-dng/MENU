<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="exo1.css" rel="stylesheet">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo1</title>
    </head>
    <body>
        
        <?php

            $NombreAleatoire = rand ( 0 , 100 );
            

            if ($NombreAleatoire%2 == 1) {
                echo "<div class=impair> $NombreAleatoire est impair </div>";
            }else {
                echo "<div class=pair> $NombreAleatoire est pair </div>";
            }

            echo "<br>";
        
            highlight_file((__FILE__));
        
        ?>

    </body>
</html>