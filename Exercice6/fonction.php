<?php
function secondegre($a,$b,$c){
    if ($a!=0) {
        $delta = pow($b,2)-4*$a*$c;
            if($delta>0){
                $solut1 = round((-$b+sqrt($delta))/2*$a,2);
                echo "X1 est:".$solut1."<br>";
                $solut2 =round((-$b-sqrt($delta))/2*$a,2);
                echo "X2 est:".$solut2 ."<br>";
            }
            elseif($delta==0){
                $X0 = round(-$b/2*$a,2);
                echo "X0 est:".$X0 ."<br>";
            }
            
            else{
                echo "pas de solution" ."<br>" ;
            }
    }
   elseif($a==0 && $b!=0 ){
         echo " léquation nest pas du second degré " ;
    }
    elseif($a==0 && $b==0 && $c==0){
        echo " léquation admet une infinité de solution ";
    }
        else{
            echo " léquation nadmet pas de solution ";
        }
    
}
?>