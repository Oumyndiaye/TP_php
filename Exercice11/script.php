<?php

include 'fonction.php';
include '../fonctions.php';
if(isset($_POST["Envoyer"])){
    $nbr = $_POST["nombre"];
    if(isPositifNumber($nbr) && $nbr>10){
            for ($i=2; $i <=$nbr ; $i++) { 
                if (nbre_premier($i)) {
                    $T ['premier'][]= $i;
                }
            } 
            for($j=1;$j<=$nbr;$j++){
                if($j<moy($nbr)){
                    $T ['inferieur'][] = $j;
                }
                 else {
                    $T['superieur'][]=$j;
                }             
            }   
            print_r($T);
    }
    else{
        header('location:index.php');
    } 
} 
      
?>