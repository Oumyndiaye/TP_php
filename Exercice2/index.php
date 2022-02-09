<?php
include "fonction.php";
    $long = rand(1,10);
    $larg = rand(1,$long-1);
    echo 'La largeur du rectangle est:' .$larg ."<br>";
    echo 'La longueur du rectangle est:' .$long ."<br>";
    $perimetre = perimetre($larg,$long);
    echo 'Le périmetre du rectangle est de:' .$perimetre ."<br>";
    $surface = surface($larg,$long);
    echo 'La surface du rectangle est de:' .$surface ."<br>";
    $diagonale=diagonale($larg,$long); 
    echo 'Le diagonale du carré est de:' .$diagonale ."<br>";
?>
