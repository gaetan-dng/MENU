<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo5</title>
    </head>
    <body>
        <form method="post" action="">
            votre text : <input type="text" name="text1">
                         <input type="submit" name="champ1">
        </form>
        

        <?php

            if(isset($_POST["champ1"])){
                 
                $valeur = $_POST["text1"];
                 
                if (!empty($valeur)) {
                    echo "<div style='color: red;'> $valeur </div>";
                }else{
                    echo "pas de texte";
                }
                 
            }


            echo "<br>";
            echo "<br>";
            echo "<br>";
        
            highlight_file((__FILE__));
        
        ?>

    </body>
</html>