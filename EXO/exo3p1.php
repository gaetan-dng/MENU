<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo3</title>
    </head>
    <body>


        
        <?php
            
            $i = 0;

            $Tableau['Nom'][0]="langlace";
            $Tableau['Nom'][1]="gremont";
            $Tableau['Nom'][2]="deneufgermain";
            $Tableau['Prenom'][0]="julien";
            $Tableau['Prenom'][1]="alexendre";
            $Tableau['Prenom'][2]="gaetan";
            $Tableau['MDP'][0]=1111;
            $Tableau['MDP'][1]=2222;
            $Tableau['MDP'][2]=3333;

            echo "<table>";

            for ($i=0; $i < 3; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 1; $j++) { 
                    echo "<td>";
                    echo $Tableau['Nom'][$i];
                    echo "<td>";
                    echo $Tableau['Prenom'][$i];
                    echo "<td>";
                    echo $Tableau['MDP'][$i];
                }  
            }

            echo "</table>";

            echo "<br>";
            echo "<br>";
            echo "<br>";
        
            highlight_file((__FILE__));
        
        ?>

    </body>
</html>