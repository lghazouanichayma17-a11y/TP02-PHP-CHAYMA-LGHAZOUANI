<?php

$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;


$chaineEnInt = (int) "42";
$decimalEnInt = (int) 15.8;     
$entierEnChaine = (string) 42;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4 </h1>

    <h2>1. Types des variables (var_dump)</h2>
    <pre>
<?php
var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
?>
    </pre>

    <h2>2. Conversions</h2>
    <pre>
"42" en entier : <?php var_dump($chaineEnInt); ?>
15.8 en entier : <?php var_dump($decimalEnInt); ?>
42 en chaîne : <?php var_dump($entierEnChaine); ?>
    </pre>

    <h2>3. Booléens avec echo</h2>
    <p>true avec echo : <?php echo $vrai; ?></p>
    <p>false avec echo : <?php echo $faux; ?></p>

    <h2>4. Booléens avec var_dump</h2>
    <pre>
<?php
var_dump($vrai);
var_dump($faux);
?>
    </pre>

    <h2>5. Conversion en booléen</h2>
    <pre>
0 : <?php var_dump((bool) 0); ?>
"0" : <?php var_dump((bool) "0"); ?>
"PHP" : <?php var_dump((bool) "PHP"); ?>
tableau vide : <?php var_dump((bool) []); ?>
    </pre>
</body>
</html>