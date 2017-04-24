<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie1exo1">Exercice 1</a></li>
                <li><a href="http://partie1exo2">Exercice 2</a></li>
                <li><a href="http://partie1exo4">Exercice 4</a></li>
                <li><a href="http://partie1exo5">Exercice 5</a></li>
                <li><a href="http://partie1exo6">Exercice 6</a></li>
                <li><a href="http://partie1exo7">Exercice 7</a></li>
                <li><a href="http://partie1exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 3 Créer une variable km. L'initialiser à 1. Afficher son contenu.
            Changer sa valeur par 3. Afficher son contenu.
            Changer sa valeur par 125. Afficher son contenu.</p>  
        <!-- Ajout de 3 paragraphe dans lesquels j'ouvre mes balises php -->
        <p>
            <?php
            // déclaration initiale de ma variable km et affichage
            $km = 1;
            echo $km . ' ';
            ?>
        </p>
        <p>  
            <?php
            // j'ajoute 2 à la valeur de km et j'affiche
            $km += 2;
            echo $km . ' ';
            ?>
        </p>
        <p>
            <?php
            // j'ajoute 122 à la valeur de km et j'affiche
            $km += 122;
            echo $km;
            ?>
        </p>
    </body>
</html>