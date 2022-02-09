<?php
error_reporting(-1);
ini_set("display_errors",1);
    if(isset($_POST["valider"])){
        $j=$_POST["jour"];
        $m=$_POST["mois"];
        $an=$_POST["annee"];
        $date = $_POST["date"];
        if (dateValide($date)) {
            $date_precedente = 
        }   
    else{
        //redirection
            header ('location:index.php');
        
    }
?>  
        

