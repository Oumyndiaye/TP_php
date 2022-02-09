<?php
include '../fonctions.php';
if(isset($_POST["Envoyer"])){
    $nbr = $_POST["nombre"];
        if(isPositifNumber($nbr)){
            echo '<ul>';
            $x = 1;
            while($x<=10){
                echo '<li>'  .$x. '*'.$nbr. '=' .$x*$nbr.'</li>' .'<br>';
                $x++;
            }
            echo '</ul>';
        }
        else{
            header('location:index.php');
        }
}       
?>