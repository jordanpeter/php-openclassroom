<?php
	include ("menus.php");
?>
<?php
     if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])){

          $_GET['repeter'] = (int) $_GET['repeter'];

          if($_GET['repeter'] <= 100){
               for ($i=0; $i < $_GET['repeter']; $i++){
                    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br>';
               }
          }

     }
     else{
          echo "Manque le nom ou l'prénom frr";
     }

 ?>
