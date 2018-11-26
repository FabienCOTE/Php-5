<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <p>
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
                echo $tab_month[2];
                ?>
            </p>
        </div>
    </body>
</html>