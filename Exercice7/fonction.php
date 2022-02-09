<?php

function dateValide(int $j,int $m,int $an):void{
    if(($j<1 && $j>31  $j>29 $m) || ($m<1 || $m>12 ) || $an>1581){
        echo "la date est valide\n";
    }
}

dateValide(30,02,2020);

?>
