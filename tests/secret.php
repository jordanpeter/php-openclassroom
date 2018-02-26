<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Formulaire Cible PHP</title>
</head>
<body>
     <?php
          if (isset($_POST['mdp']) AND $_POST['mdp'] == 'kangourou'){
      ?>
                <p>Bonjour !</p>
               <h1>Voici les codes d'accès :</h1>
                  <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

                  <p>
                  Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
                  La NASA vous remercie de votre visite.
                  </p>
          <?php
               }

          else{
               echo "MOTHERFUCKER AHAHA U GAY NO U";    
          }
          ?>
</body>
</html>
