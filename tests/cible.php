<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Formulaire Cible PHP</title>
</head>
<body>
     <p>Bonjour !</p>
     <p>Je sais ton nom petit fdp de <?php echo htmlspecialchars($_POST['prenom']); ?></p>
     <p>Euh je dois faire apparaitre ce truc alors voilà => <?php echo htmlspecialchars($_POST['message']) ?></p>
     <p>J'dois encore faire apparaitre un truc histoire de voilà fin tsais bien frr => <?php echo $_POST['choix'] ?></p>
     <p>Tu connais le refrain => <?php echo $_POST['case'] ?></p>
     <p>T'aimes les frites Batard ? => <?php echo $_POST['frites'] ?></p>
     <p>Ton pseudo c'est : > <?php echo $_POST['pseudo'] ?></p>
     <p>Reviens <a href="formulaire.php">Ici</a></p>
</body>
</html>
