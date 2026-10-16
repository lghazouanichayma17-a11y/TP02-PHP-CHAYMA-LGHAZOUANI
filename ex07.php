<?php
$nombre = 7;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7 : Boucles for</h1>

    <section>
        <h2>Table de multiplication de <?= $nombre ?></h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>

    <section>
        <h2>Pyramide de 6 lignes</h2>
        <pre>
<?php
// Boucle externe : les lignes
for ($ligne = 1; $ligne <= 6; $ligne++) {
    // Boucle interne : les étoiles de la ligne
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "\n";
}
?>
        </pre>
    </section>
</body>
</html>