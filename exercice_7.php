<?php
$tab_departments = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];
$tab_departments[51] = 'Marne';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
        </div>
        <div>
            <p><?php print_r($tab_departments); ?></p>
        </div>
    </body>
</html>