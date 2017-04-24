<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie1exo1">Exercice 1</a></li>
                <li><a href="http://partie1exo2">Exercice 2</a></li>
                <li><a href="http://partie1exo3">Exercice 3</a></li>
                <li><a href="http://partie1exo5">Exercice 5</a></li>
                <li><a href="http://partie1exo6">Exercice 6</a></li>
                <li><a href="http://partie1exo7">Exercice 7</a></li>
                <li><a href="http://partie1exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 4 Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
            Les afficher.</p>  
        <!-- Ajout d'un paragraphe dans lesquels j'ouvre mes balises php séparées par des sauts de ligne -->
        <p>
            <?php
            // déclaration d'une variable en chaîne de caractère et affichage
            $string = 'Je suis une chaîne de caractère';
            echo $string;
            ?>
            <br/>
            <?php
            // déclaration d'une variable en nombre entier et affichage
            $int = 42;
            echo $int;
            ?>
            <br/>
            <?php
            // déclaration d'une variable en nombre décimale et affichage
            $float = 3.14;
            echo $float;
            ?>
            <br/>
            <?php
            // déclaration d'une variable en booléan et affichage
            $bool = true;
            echo $bool;
            ?>
        </p>
    </body>
</html>