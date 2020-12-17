<?php

    function afficher_requet_select($marequete)
    {

        $BDD = new PDO('mysql:host=192.168.65.232; dbname=gaetan_exo2; charset=utf8','root', 'root');

    //     echo"<table border=1>
    //     <tr>
    //         <td>$marequete </td>
          
    //     </tr>
        
    // </table>";  
        try {
            $marequete = $BDD->query($marequete);
            if ($marequete->rowCount()) {
                while($TableauDunTuple = $marequete->fetch()){
                    echo ' num SS'.$TableauDunTuple["numSS"].' prenom '.$TableauDunTuple["prenom"].' '.$TableauDunTuple["nom"].'<br>';
                }        
            } else {
                echo "pas de resulat";
            }
           
        } catch (\Throwable $th) {
            echo 'Erreur : '.$th;
        }

}
function ajout(){
    try{
$MaBase = new PDO('mysql:host=192.168.65.232; dbname=gaetan_exo2; charset=utf8','root', 'root');
$ObjetResultatDeRequeteBrut = $MaBase->query('INSERT INTO patient VALUES ("gaetan", "deneufgermain", "18")');
}catch(Exception $e){
echo "Une erreur c'est produite :".$e->getMessage();
}
}

?>



<html>
    <head>
        <link href="../page_menu.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="#">HTML</a>
                        <ul>
                            <li><a href="exo1.html">exo 1</a></li>
                            <li><a href="exo2.html">exo 2</a></li>
                            <li><a href="exo3.html">exo 3</a></li>
                            <li><a href="exo4.html">exo 4</a></li>
                            <li><a href="exo6.html">exo 6</a></li>
                            <li><a href="Pages_FINAL/Page_accueilF.html">exo final</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#">CSS</a>
                        <ul>
                            <li><a href="exo1CSS.html">exo 1</a></li>
                            <li><a href="exo2CSS.html">exo 2</a></li>
                            <li><a href="exo3CSS.html">exo 3</a></li>
                            <li><a href="exo4CSS.html">exo 4</a></li>
                            <li><a href="Pages_FINAL/Page_accueilF.html">exo final</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#">PHP</a>
                        <ul>
                            <li><a href="BDD_TD1_Exo1.php">Partie 1 exo 1</a></li>
                            <li><a href="BDD_TD1_Exo2.php">Partie 1 exo 2</a></li>
                            <li><a href="BDD_TD1_Exo3.php">Partie 1 exo 3</a></li>
                            <li><a href="BDD_TD1_Exo4.php">Partie 1 exo 4</a></li>
                            <li><a href="BDD_TD1_Exo5.php">Partie 1 exo 5</a></li>
                            <li><a href="BDD_TD1_Exo6.php">Partie 1 exo 6</a></li>
                            <li><a href="BDD_TD1_Exo7.php">Partie 1 exo 7</a></li>
                            <li><a href="BDD_TD2_Exo1.php">Partie 1 exo 1</a></li>
                            <li><a href="BDD_TD2_Exo2.php">Partie 2 exo 2</a></li>
                            <li><a href="BDD_TD2_Exo3.php">Partie 2 exo 3</a></li>
                            <li><a href="fonction.php">fonction</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#">BDD</a>
                        <ul>
                            <li><a href="EXO1.php">exo 1</a></li>
                            <li><a href="EXO2.php">exo 2</a></li>
                            <li><a href="EXO3.php">exo 3</a></li>
                            <li><a href="EXO4.php">exo 4</a></li>
                            <li><a href="EXO5.php">exo 5</a></li>
                            <li><a href="EXO6.php">exo 6</a></li>
                            <li><a href="EXO7.php">exo 7</a></li>
                        </ul>
                    </li>

                    <li><a href="#">SQL</a>
                        <ul>
                            <li><a href="SQL_TD3_Exo2.php">TD 3 exo 2</a></li>
                            <li><a href="SQL_TD4_Exo1.php">TD 4 exo 1</a></li>
                            <li><a href="SQL_TD4_Exo2.php">TD 4 exo 2</a></li>
                            <li><a href="SQL_TD4_Exo3.php">TD 4 exo 3</a></li>
                            <li><a href="fonction_SQL.php">fonction</a></li>
                        </ul>
                    </li>

                    <li class="fin"><a href="../menu.php">MENU</a></li>
                </ul>
            </nav>
        </div>
    </body>
</html>

<?php 
    highlight_file(__FILE__)
?>
