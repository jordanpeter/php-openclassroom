<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        <?php
        $infos = array ('Jo','Mike','Tom');
        for ($x = 0 ; $x< 3 ; $x++){
             echo $infos[$x] . '<br>';
        }
         ?>
         <p></p>
         <?php
          $names = array ('BANANE','CHIQUITA','1212');
               foreach ($names as $elements) {
                    echo $elements . '<br>';
               }
          ?>
          <p></p>
          <?php
           $coordo = array(
               'nom' => 'Peter',
               'prenom' => 'Jordan',
               'age' => 12,
               'adresse' => 'CHEZ TA MERE LOL'
           );
           foreach ($coordo as $elements) {
               echo $elements . '<br>';
           }
           ?>
           <p></p>
           <?php
           foreach ($coordo as $key => $elements) {
                echo $key . ' vaut ' . $elements . '<br>';
           }
           echo '<pre>';
           print_r($coordo);
           echo '</pre>';
           ?>
           <p></p>

           <?php
           if (array_key_exists('nom' , $coordo)){
                echo 'la clé "nom" est existante' . '<br>';
           }

           if(array_key_exists('age' , $coordo)){
                echo 'la clé "age" est existante';
           }
            ?>
            <p></p>

            <?php
            $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');
            if(in_array('Myrtille' , $fruits)){
                 echo 'JA MYRTILLE';
            }
            if(in_array('Cerise' , $fruits)){
                 echo 'AYAYA CERISE' . '<br>';
            }

            $position = array_search('Fraise', $fruits);
            echo 'Fraise est en pos ' . $position . '<br>';

             ?>
    </body>
</html>
