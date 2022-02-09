<?php
include "fonction.php";
    $X = rand(1,10);
    $Y = rand(1,10);
    $som = somme($X,$Y);
    echo 'la somme est de :'.$som ."<br>";
    $diff = difference($X,$Y);
    echo 'la difference entre les deux nombres est de:'.$diff ."<br>";
    $div = division($X,$Y);
    echo 'la division entre les deux nombres est de:' .$div ."<br>";
    $carre = carre($X,$Y);
    echo "le carre d'un nombre est de:" .$carre ."<br>";
    $mod = modulo($X,$Y);
    echo 'le reste de la division  entre les deux nombres est de:' .$mod ."<br>";
    $expo = exponentielle($X,$Y);
    echo 'la division entre les deux nombres est de:' .$expo ."<br>";

?>