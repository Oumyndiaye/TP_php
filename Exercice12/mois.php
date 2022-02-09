<?php
include 'fonction.php';
if(isset($_POST['français'])){
    $_POST['français']=$mois;
         $mois = array(
            ' ',
            'Janvier',
            'Fevrier',
            'Mars',
            'Avril',
            'Mais',
            'Juin',
            'Juillet',
            'Août',
            'Septembre',
            'Octobre',
            'Novembre',
            'Décembre'
        ); 
        echo tableau($mois);
        
       // tableau($français);
}
/* if(isset($_POST['anglais'])){
    $anglais = $_POST['anglais'];
    $HTML = array(
        'January',
        'February',
        'Marth',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    );
} */



?>