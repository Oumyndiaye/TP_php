<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carre</title>
</head>
<body>
<?php

//<div>
include "fonction.php";
    $cote = rand(1,10);
    echo 'Le côté du carré est:' .$cote ."<br>";
    $perimetre = perimetre($cote);
    echo 'Le périmetre du carré est de:' .$perimetre ."<br>";
    $surface = surface($cote);
    echo 'La surface du carré est de:' .$surface ."<br>";
    $diagonale=diagonale($cote); 
    echo 'Le diagonale du carré est de:' .$diagonale ."<br>";
/* </div> 

<div>
<a href=Exercice2>Suivant</a>;
</div>
 */

?>
</body>
</html>
