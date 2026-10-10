<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice2</title>
</head>
<body>
    <?php 
    // 1.Déclaration des variables
    $nom = "Lghazouani";
    $prenom = "Chayma";
    $age = 20;
    $formation = "Informatique";
    // 2.Phrase avec concaténation
    $presentation = "Je m'appelle".$prenom."".$nom.",j'ai".$age."ans et je suis en".$formation.".";
    // 3.Compléter avec .=
    $presentation.= "J'apprends PHP";
    echo $presentation. "<br><br>";

    // 4.Deux notes
    $note = 12;
    $Note = 16;
    echo "note(minuscule)=".$note."<br>";
    echo "Note (majuscule)=".$Note."<br>";
 
    ?>
</body>
</html>