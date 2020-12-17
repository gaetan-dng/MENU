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

        <div class="top">
            <?php 
            tableau();
            ?>
        </div>


        <div class="back">
            <?php 
            tableau();
            ?>
        </div>


        <?php

            function tableau()
            {
                echo "<div class='presentation'>                                                                              <!--div qui accueil le tableau-->
                        <table border='1'> 
                            <tr>
                                <td class='hg'>Nom</td>
                                <td class='hd'>Deneufgermain</td>
                            </tr>
                            <tr>
                                <td>Prenom</td>
                                <td>Gaëtan</td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>18 ans</td>
                            </tr>
                        </table>";
            }

        ?>

    </body>
</html>