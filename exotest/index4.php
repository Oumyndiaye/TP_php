<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Fonction date/php</title>
</head>
<body>
    <?php
        echo time() .'<br>';
        echo 'Nous sommes le ' .date("d-m-Y").'<br>';
        echo "Aujourd'hui c'est ".date("l-m-Y").'<br>' ;
        echo "Il est " .date("H:i:s").'<br>';
        //echo date("d-m-Y");
        $jour = array(
            '',
            'Lundi',
            'Mardi',
            'Mercredi',
            'Jeudi',
            'Vendredi');
        $mois = array(
            '',
            'Janvier',
            'Fevrier',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Juillet',
            'Août',
            'septembre',
            'Octobre',
            'Novembre',
            'Decembre');
            $datefr = $jour[date("N")].' ' .date("d").' ' .$mois[date("n")].' '.date("Y") ;
            //echo 'Nous sommes le ' .$datefr .'<br>';
            setlocale(LC_TIME,'fr_FR');
            echo 'Nous sommes le '.strftime("%A %d %B %Y").'<br>';
            //echo 'Il est actuellement ' .strftime("%H :  %M : %S") ;



    ?>
    
</body>
</html>