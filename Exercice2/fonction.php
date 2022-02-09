<?php
function perimetre($larg,$long){
    $perimetre = $larg * $long ;
    return $perimetre;  
}

function surface($larg,$long){
    $surface = $larg * $long;
    return $surface;
}
function diagonale($long,$larg){
    $diagonale =round( sqrt( (pow($larg,2)  + pow($long,2)) ),2);
    return $diagonale;
}

?>