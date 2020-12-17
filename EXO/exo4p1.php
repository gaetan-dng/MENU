<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../page_menu.css" rel="stylesheet">
        <title>exo4</title>
    </head>
    <body>
        
        <?php

            $a = 3;
            $b = 2;
            $c = 8;


            $q=($b*$b)-(4*$a*$c);

            if($q<0) 
                print("Votre équation n'a pas de solution dans R");
            else if($q==0) {
                $x=-$b/2*$a;
                print("Votre équation a pour solution:".$x);
            }
            else if($q>0){
                $x=(-$b-(sqrt($q)))/(2*$a); 
                $x1=(-$b+(sqrt($q)))/(2*$a);
                print("Votre équation admet deux solutions:".$x.$x1);
            }
        
            echo "<br>";
            echo "<br>";
            echo "<br>";
        
            highlight_file((__FILE__));
        
        ?>


    </body>
</html>