<?php
function somme($X,$Y){
    $som = $X + $Y;
    return $som;
}
function difference($X,$Y){
    $diff = $X -$Y;
    return $diff;
}
function produit($X,$Y){
    $produit = $X*$Y;
    return $produit;
}
function division($X,$Y){
    $div = round($X/$Y,2);
    return $div;
}
function carre($X){
    $carre = $X*$X;
    return $carre;
}
function modulo($X,$Y){
    $mod = $X%$Y;
    return $mod;
}
/*function exponentielle(e,$X){
    e = 2.71828182846;
    $expo =pow($e,$X) ;
    return expo;
}*/

?>