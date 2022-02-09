<?php
include '../fonctions.php';
if(isset($_POST["Envoyer"])){
    $nbr = $_POST["nombre"];
        if(isPositifNumber($nbr)){
            for($x=1;$x<=$nbr;$x++){
                ?>
              <input type="text" name="nom<?php echo $i ?>"  > </br></br>
<?php
            }
            
        }
        else{
            header('location:index.php');
        }
}       
?>
