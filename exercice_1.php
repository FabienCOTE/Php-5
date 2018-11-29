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
$show = nl2br(print_r($tab_month, true));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 1</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 1</h1>
            <p>Créer un tableau months et l'initialiser avec les valeurs suivantes :</p>
            <ul>
                <li>Janvier</li>
                <li>Février</li>
                <li>Mars</li>
                <li>Avril</li>
                <li>Mais</li>
                <li>Juin</li>
                <li>Juillet</li>
                <li>Août</li>
                <li>Septembre</li>
                <li>Octobre</li>
                <li>Novembre</li>
                <li>Décembre</li>                
            </ul>
        </div>
        <div>
            <p><?= $show; ?></p>
        </div>
    </body>
</html>