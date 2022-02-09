<?php
include '../fonctions.php';
if(isset($_POST["Envoyer"])){
    $nbr = $_POST["nombre"];
        if(isPositifNumber($nbr)){
            echo '<ul>';
            $x = 1;
            while($x<=$nbr){
                echo '<li>'  .$x.'</li>' .'<br>';
                $x++;
            }
            echo  '</ul>';
        }
        else{
            header('location:index.php');
        }
}       
?>




