<?php include "exo3-2.php";?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="exo3.css">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo3</title>
    </head>
    
    <body>
        <div>
            <table>
                <form action="" method="post">
                    <tr>
                        <th>Valeurs : </th>
                        <td><input type="number" name="Valeur1" id="Valeur1"></td>
                        <td><input type="number" name="Valeur2" id="Valeur2"></td>
                        <td><input type="number" name="Valeur3" id="Valeur3"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="Calcul"> moyenne</button></td>
                    </tr>  
                </form> 
            </table>   
        </div>
        <div class="bottom">
            <?php
                if(isset($_POST['Calcul'])){
                    moyenne(
                        array($_POST['Valeur1'],$_POST['Valeur2'],$_POST['Valeur3'])
                    );
                }
            ?>
        </div>

    
        <div>
            <h1>Base :</h1>
            <?php highlight_file(__FILE__); ?>
            <h1>Fonction :</h1>
            <?php highlight_file("exo3-2.php"); ?>
        </div>
        
    </body>
</html>