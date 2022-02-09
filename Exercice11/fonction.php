<?php
function nbre_premier($y):bool{
    $k=1;
    for ($j=2; $j<=intval($y/2); $j++) { 
        if ($y%$j==0) {
            $k++;
        }
    }
    return $k==1;
}
function moy($y){
    $som = 0;
    $moy = 0;
    for($i=1;$i<=$y;$i++){ 
     $som= ($som + $i);        
    }
    return $moy = $som / $y;
}






?>