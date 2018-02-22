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
     <p>Je sais ton nom petit fdp de <?php echo $_POST['prenom']; ?></p>
     <p>Reviens <a href="formulaire.php">Ici</a></p>
</body>
</html>
