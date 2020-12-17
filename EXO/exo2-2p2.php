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

            function Tableau($Titre1,$Titre2,$Titre3) {
                
                ?>
                <table>

                    <tr>
                        <?php echo"<th>$Titre1</th>";?>
                        <td>Case 1</td>
                        <td>Case 2</td>
                    </tr>
                    <tr>
                        <?php echo"<th>$Titre2</th>";?>
                        <td>Case 3</td>
                        <td>Case 4</td>
                    </tr>
                    
                    <tr>
                        <?php echo"<th>$Titre3</th>";?>
                        <td>Case 5</td>
                        <td>Case 6</td>
                    </tr>

                </table>
                <?php
            }

        ?>

    </body>
</html>