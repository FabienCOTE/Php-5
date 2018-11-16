<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>FAvec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
        </div>
        <div>
            <p><?php
                $tab_month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
                $tab_month[7] = 'aôut';
                echo $tab_month[7];
            ?></p>
        </div>
    </body>
</html>