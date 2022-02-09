<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les fonctions</title>
</head>
<body>
    <?php
    function Bonjour(){
        echo "Bonjour à tous <br>";
    }
    Bonjour();
    function BonjourUtilisateur($prenom){
        echo 'Bonjour' .$prenom. ' ! <br>'  ;
    }
    BonjourUtilisateur('Pierre');
    function MonAge($prenom,$age){
        echo $prenom. ' a '.$age. ' ans ';
    }
    MonAge('oumy ndiaye' ,23);
    function DireBonjour(){
        return "Bonjour";}
    function DireBonsoir(){
        echo "Bonsoir";}
        $bonjour = DireBonjour();
        $bonsoir = DireBonsoir();
        echo $bonjour. '.<br>';
        echo $bonsoir. '.<br>';
?>
</body>
</html>

