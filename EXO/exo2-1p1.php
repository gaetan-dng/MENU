<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo2-1</title>
    </head>
    <body>
        
        <?php
            
            $i = 0;
     
            for ($i=0; $i < 5; $i++) { 
                $NombreAleatoire = rand ( 0 , 100 );
                echo $tab[$i] = $NombreAleatoire;
                echo "<br>";
            }

            echo "<br>";
        
            highlight_file((__FILE__));
        
        ?>

    </body>
</html>