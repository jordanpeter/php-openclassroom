<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     <?php
          $phrase = 'Hello les 12';
          $longueur = strlen($phrase); //strlen pour length() en soi
          echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br>' . $phrase;
     ?>
     <p></p>
     <?php
          $ma_variable = str_replace('b', 'p', 'bim bam boum megabouze');
          echo $ma_variable;
      ?>
      <p></p>
      <?php
          $chaine = 'MEGADOUZE MEGADOUZE MEGADOUZE';
          $chaine = str_shuffle($chaine);
          echo $chaine;
       ?>
       <p></p>
       <?php
          $voice = 'MEGAAAAAADOUZE';
          $voice = strtolower($voice);
          echo $voice;
        ?>
        <p></p>
        <?php
          $jour = date('d');
          $mois = date('m');
          $annee = date('Y');

          $heure = date('H');
          $minute = date('i');

          echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute;
         ?>
         <p></p>

         <?php
          function DireBonjour($nom){
               echo 'Bonjour ' . $nom . ' !<br>';
          }
          DireBonjour('Ta mère');
          ?>
          <p></p>
          <?php
               function VolumeCone($rayon, $hauteur){
                    $volume = ($rayon * $rayon) * 3.14 * $hauteur * (1/3);
                    return $volume;
               }

               $volume = VolumeCone(3,1);
               echo 'Le volume d\' un cône de rayon 3 et de hauteur 1 est de ' . $volume;
           ?>


















</body>
</html>
