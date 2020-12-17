<?php

    $user = "user";
    $pass = "pass";
    
    function form($user,$pass){

        ?> 

        <form action="" method="post">

            <div class="input">

                <div class="divuser">
                    <label for="user">user :</label>
                    <input type="text" id="user" name="user">
                </div>

                <div class="divpass">
                    <label for="pass"> password :</label>
                    <input type="text" id="pass" name="pass">
                </div>
                <div class="valid">
                    <input type="submit" name="button">
                </div>
                    
            </div>

        </form>

        <?php
        
            if (isset($_POST['button'])) {
                
                if ($_POST['user']==$user) {
                    
                    if ($_POST['pass']==$pass) {
                        
                        return "ok";

                    }

                }else{
                    return "Erreur";
                }
            }
    }    
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>EXO FINAL PART2</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="../page_menu.css" rel="stylesheet">
        <style>

            .input{
                width: 410px;
            }

            .divuser{
                padding-bottom: 20px;
            }

            .divpass{
                padding-bottom: 20px;
            }

        </style>          
    </head>   
       
    <body>
        <?php

            if (form('user','pass')=="ok") {
                echo 'bienvenue';
                ?><div><a href="pagesecret.php">Lien</a></div><?php
            }else{
                echo"Erreur";
            }

        ?>

    </body>
</html>        

   

