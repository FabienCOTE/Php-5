<?php
$tab_departments = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];
$show = $tab_departments[59];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
        </div>
        <div>
            <p><?= $show; ?></p>
        </div>
    </body>
</html>