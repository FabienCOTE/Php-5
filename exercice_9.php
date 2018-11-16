<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 9</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 9</h1>
            <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
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
                foreach($tab_departments as $department) {
                    echo '<p>' . $department . '</p>';
                }
            ?></p>
        </div>
    </body>
</html>