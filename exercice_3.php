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
$show = $tab_month[5];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
        </div>
        <div>
            <p><?= $show; ?></p>
        </div>
    </body>
</html>