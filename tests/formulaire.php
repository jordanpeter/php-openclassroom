<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Formulaire PHP</title>
</head>
<body>
     <form action="cible.php" method="post" enctype="multipart/form-data">
          <p>
               blablablabla
          </p>
          <input type="text" name="prenom" value="Jo">
          <input type="submit" value="Valider">
          <br><br>
          <textarea name="message" rows="8" cols="45">
               PENI
          </textarea>
          <br><br>
          <select name="choix">
               <option value="choix1">Choix1</option>
               <option value="choix2" selected="selected">Choix2</option>
               <option value="choix3">Choix3</option>
               <option value="choix4">Choix4</option>
               <option value="choix5">Choix5</option>
          </select>
          <br><br>
          <input type="checkbox" name="case" value="case" checked="checked"><label for="case">Case</label>
          <br><br>
          <input type="radio" name="frites" value="oui" id="oui" checked="checked"><label for="Oui">Oui</label>
          <input type="radio" name="frites" value="non" id="non"><label for="Non">Non</label>
          <br><br>
          <input type="hidden" name="pseudo" value="A12Z">
          <br><br>
     </form>
     <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
     </form>
     <form action="secret.php" method="post">
          <input type="password" name="mdp">
          <input type="submit" value="Valide moi ça">
     </form>
</body>
</html>
