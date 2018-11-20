<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
        </div>
        <div>
            <p>
                <?php
                $tab_departments = array(
                    02 => 'Aisne',
                    59 => 'Nord',
                    60 => 'Oise',
                    62 => 'Pas-de-Calais',
                    80 => 'Somme'
                );
                print_r($tab_departments);
                ?>
            </p>
        </div>
    </body>
</html>