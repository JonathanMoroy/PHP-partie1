<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie1exo1">Exercice 1</a></li>
                <li><a href="http://partie1exo2">Exercice 2</a></li>
                <li><a href="http://partie1exo3">Exercice 3</a></li>
                <li><a href="http://partie1exo4">Exercice 4</a></li>
                <li><a href="http://partie1exo5">Exercice 5</a></li>
                <li><a href="http://partie1exo7">Exercice 7</a></li>
                <li><a href="http://partie1exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 6 Créer une variable nom et l'initialiser avec la valeur de votre choix.
            Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>  
        <!-- Ajout d'un paragraphe dans lesquels j'ouvre mes balises php -->
        <p>
            <?php
            // déclaration d'une variable nom et affichage inséré entre deux string
            $nom = 'Jonathan';
            echo 'Bonjour ' . $nom . ', comment vas tu ?';
            ?>
        </p>
    </body>
</html>