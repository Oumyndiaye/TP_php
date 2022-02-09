<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo6</title>  
    </head>
    <body>
        <?php
        include 'fonction.php';
        include '../fonctions.php';
        if (isset($_POST["Valider"])){
            $a = $_POST["Entrer_a"];
            $b = $_POST["Entrer_b"];
            $c = $_POST["Entrer_c"];
            validChamp($a);
            validChamp($b);
            validChamp($c);
            secondegre($a,$b,$c); 
        ?>
            <a href="index.php">Retour</a>
        <?php }
         else{
            header('location:index.php');
        }      
        ?>        
    </body>
</html>

