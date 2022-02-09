<?php
include "fonction.php";
$nombre1 = rand();
$nombre2 = rand();
echo'La valeur du nombre1 est de:'.$nombre1."<br>";
echo'La valeur du nombre2 est de:'.$nombre2."<br>";
echo 'Après permutation <br>';
permutation($nombre1,$nombre2);
echo'La valeur du nombre1 est de:'.$nombre1."<br>";
echo'La valeur du nombre2 est de:'.$nombre2;

?>