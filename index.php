<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exercice 3 </title>
</head>
<body>
    <h1># Exercice 3</h1>
<p>Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'.
</p>
<!-- <?php
$n = 1;
while ($n <= 15) {
    echo 'Ceci est le nombre : '.$n. ' On y est presque! </br>';
    $n++;
} echo '<p>Voilà fini</p>'
?> -->

<?php
for ($n = 1; $n <= 15; $n++){
    if($n !=15){
        ?>
        <p><?= 'On y est presque. '?></p>
        <?php
        }else{
            ?>
            <p><?= 'On y est enfin! ' ?></p>
            <?php
        }
    }
    ?>
</body>
</html>