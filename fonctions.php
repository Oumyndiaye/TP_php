<?php
function estNombre($nbre){
        return ($nbre==0 || is_numeric($nbre)) ;
       
}
function isPositifNumber($x):bool{
    return ($x>0 && is_numeric($x));
}
function validChamp($a){
    if(empty($a) || !estNombre($a) ){
            header('location:index.php') ;   
    }        
}
?>
