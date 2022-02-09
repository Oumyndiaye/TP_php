<?php
include "fonction.php";
    $xa = rand(-100,100);
    $ya = rand(-100,100);
    $xb = rand(-100,100);
    $yb = rand(-100,100);
    $distance = distance($xa,$ya,$xb,$yb);
    echo 'La distance entre les points A('.$xa.','.$ya.') et B('.$xb.','.$yb.') est de:' .$distance;
?>