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
            else if($delta==0){
                $X0 = round(-$b/2*$a,2);
                echo "X0 est:".$X0 ."<br>";
            }
            
            else if($delta<0){
                echo "pas de solution" ."<br>" ;
            }else{
                echo "nada";
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

/* function degre2(int $a,int $b,int $c):void{
    if($a == 0 && $b ==0 && $c ==0){
        echo "On à une infinite de solution<br>";
    } else if ($a == 0 && $b != 0) {
        $s = (-$c/$b);
        echo "On à une equation du premier degre<br>avec comme solution S = ".$s."<br>";
    }else if($a == 0 && $b ==0 && $c !=0){
        echo "Y'a pas de solution S = ensemble vide<br>";
    }else if($a != 0){
        $delta = pow($b,2)-4*$a*$c;
        if($delta<0){
            echo "Delta est negatif donc y'a pas de solution <br>";
        }else if($delta>0){
            $solut1 = round((-$b+sqrt($delta))/2*$a,2);
            echo "X1 est:".$solut1."<br>";
            $solut2 =round((-$b-sqrt($delta))/2*$a,2);
            echo "X2 est:".$solut2 ."<br>";
        }else if($delta == 0){
            $X0 = round(-$b/2*$a,2);
            echo "X0 est:".$X0 ."<br>";
        }else{
            echo "Choix inconnue<br>";
        }
    } 

}*/











?>