<?php

function tableau($mois){
    echo    "<tr>";
    for($i=1;$i<=count($mois);$i++){
    echo  "<td>".$mois[$i]."</td>" .'<br>';
     } 
    echo "</tr>";

echo tableau($mois[$i]);
    }
?>

 