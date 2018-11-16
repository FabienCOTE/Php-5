<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
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
                echo $tab_departments[59];
            ?></p>
        </div>
    </body>
</html>