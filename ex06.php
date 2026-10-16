<?php

$numeroMois = 3;


switch ($numeroMois) {
    case 1:$Mois = "Janvier";
        break;
    case 2:$Mois = "Février";
        break;
    case 3:$Mois = "Mars";
        break;
    case 4:$Mois = "Avril";
        break;
    case 5:$Mois = "Mai";
        break;
    case 6:$Mois = "Juin";
        break;
    case 7:$Mois = "Juillet";
        break;
    case 8:$Mois = "Août";
        break;
    case 9:$Mois = "Septembre";
        break;
    case 10:$Mois = "Octobre";
        break;
    case 11:$Mois = "Novembre";
        break;
    case 12:$Mois = "Décembre";
        break;
    default:
        $Mois = "Numéro de mois invalide";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Exercice 6 : Nom du mois avec switch</h1>
    <p>Numéro du mois : <?= $numeroMois ?></p>
    <p>Résultat : <strong><?= $Mois ?></strong></p>
</body>
</html>