<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 8</h1>
            <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
        </div>
        <div>
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
            foreach ($tab_month as $month) {
            ?>
            <p><?= $month; ?></p>
            <?php
            }
            ?>
        </div>
    </body>
</html>