<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Fonction de tableaux</title>
</head>
<body>
    <?php
    $voiture = array(
        'citroen' => 'DS3',
        'peugeot' => '306',
        'peugeot' =>  306 ,
        'renault' => 'clio'
    );
   print_r(array_keys($voiture,306,true)) ;
   $loisirs = array(
       'sport' => 'lutte',
       'voyage' => 'ile_saloum',
       'musique' =>'mbalax'
    );
    echo '<pre>';
    print_r(array_keys($loisirs,'mbalax')) ;
    echo '</pre>';
    echo '<pre>';
    print_r(array_values($loisirs)); 
    echo '</pre>';
    foreach($loisirs as $clef => $relax){
        echo "la $relax est une $clef ". '<br>';      
    }
   if(array_key_exists( 'musique',$loisirs)){
       echo 'la musique existe'.'<br>';
   } 
   else{
       echo "la musique n'existe pas" .'<br>'; 
   }; 
   print_r(array_search('mbalax',$loisirs));
   print_r(array_key_exists('musique',$loisirs));
   $prenoms = array("oumy","awa","safietou");
  if(in_array("oumy",$prenoms,true)){
  echo "prénom trouvé";
  }
  else{
      echo "prénom non trouvé";
  }
  $sport = array('lutte','natation','lutte','football','natation');
  echo count($sport);
  echo '<pre>';
    print_r(array_count_values($sport));
    echo '</pre>';
    $compare = array(
        "a" => "bleu",
        "b" => "vert",
        "c" => "jaune"
    );
    $comparant =array(
     "c" => "bleu",
     "b" => "vert"
    ); 
    echo '<pre>';
    print_r(array_diff_assoc($compare,$comparant)) ;
    echo '</pre>';
    echo '<pre>';
    print_r(array_diff_key($compare,$comparant)) ;
    echo '</pre>';
    echo '<pre>';
    print_r(array_diff($compare,$comparant));
    echo '</pre>';
    ?> 
</body>
</html>



