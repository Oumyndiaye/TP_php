<?php
function perimetre($cote){
    $perimetre = $cote *4;
    return $perimetre;  
}

function surface($cote){
    $surface = $cote * $cote;
    return $surface;
}
function diagonale($cote){
    $diagonale =round( sqrt(2) * $cote,2);
    return $diagonale;
}

?>


