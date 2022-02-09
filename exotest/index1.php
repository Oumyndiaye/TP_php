<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    <?php
        /*$prenoms = array('Pierre','Paul','Jacques');
         $prenoms [0] = 'Pierre';
        $prenoms [1] = 'Paul';
        $prenoms [2] = 'Jacques'; 
        echo $prenoms[1] .'<br>';
        for($x = 0;$x <= 2;$x++){
            echo $prenoms[$x].'<br>';
        }
        foreach($prenoms as $items){
            echo $items .'<br>';
        }*/
        $age = array(
        'Pierre' => 26,
        'Paul' => 22,
        'Jacques' => 'non renseigné');
        //echo $age['Pierre'];
        foreach($age as $valeurs){
            echo $valeurs .'<br>';
        }
        foreach($age as $clef => $valeurs){
            echo " L'âge de $clef est $valeurs .<br> ";
        }
            echo '<pre>';
        print_r($age);
            echo '</pre>';
        $membres = array(
            array('oumy ndiaye',24,'aaondiaye@gmail.com'),
            array('mbaye sow beye',23,'beye0095@gmail.com'),
            array('rawane sow',20,'rawane@gmail.com')
        );
        echo $membres[0][0]. ' a ' .$membres[0][1]. ' ans.Son mail est : ' .$membres[0][2].'.<br>';
        echo $membres[1][0]. ' a ' .$membres[1][1]. ' ans.Son mail est : ' .$membres[1][2]. '.<br>';
        echo $membres[2][0]. ' a ' .$membres[2][1]. ' ans.Son mail est : ' .$membres[2][2]. '.<br>';
        for($lignes=0;$lignes<3;$lignes++){
            $membre_n° = $lignes+1;
            echo 'Membres numéro '.$membre_n°;
            echo '<ul>';
            for($col=0;$col<3;$col++){
                echo '<li>' .$membres[$lignes][$col]. '</li>';
            }
            echo '</ul>';
        }
    ?>
    
</body>
</html>

