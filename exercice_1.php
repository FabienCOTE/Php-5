<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <p><?php
                $tab_month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
                print_r($tab_month);
            ?></p>
        </div>
    </body>
</html>