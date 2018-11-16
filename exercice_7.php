<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
        </div>
        <div>
            <p><?php
                $tab_departments = array (
                    02 => 'Aisne',
                    59 => 'Nord',
                    60 => 'Oise',
                    62 => 'Pas-de-Calais',
                    80 => 'Somme'
                );
                $tab_departments[51] = 'Reims';
                print_r($tab_departments);
            ?></p>
        </div>
    </body>
</html>