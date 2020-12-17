<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo2-2</title>
    </head>
    <body>
        
        <?php
            
            $i = 0;

            $Tableau['Nom'] = "Deneufgermain";
            $Tableau['Prenom'] = "Gaetan";
            $Tableau['MDP'] = "1234";


            for ($i=0; $i < 1; $i++) { 
                echo $Tableau['Nom'];
                echo "<br>";
                echo $Tableau['Prenom'];
                echo "<br>";
                echo $Tableau['MDP'];
                echo "<br>";
            }


            echo "<br>";
        
            highlight_file((__FILE__));
        
        ?>

    </body>
</html>