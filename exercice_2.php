<?php
$tab_month = [
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
];
$show = $tab_month[2];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 2</h1>
            <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
        </div>
        <div>
            <p><?= $show; ?></p>
        </div>
    </body>
</html>