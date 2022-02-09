<?php
function distance($xa,$ya,$xb,$yb){
    $distance =round(sqrt(pow($xb-$xa,2) + pow($yb-$ya,2)),2);
    return $distance;
}
?>


