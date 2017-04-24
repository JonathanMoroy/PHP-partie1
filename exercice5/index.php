<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie1exo1">Exercice 1</a></li>
                <li><a href="http://partie1exo2">Exercice 2</a></li>
                <li><a href="http://partie1exo3">Exercice 3</a></li>
                <li><a href="http://partie1exo4">Exercice 4</a></li>
                <li><a href="http://partie1exo6">Exercice 6</a></li>
                <li><a href="http://partie1exo7">Exercice 7</a></li>
                <li><a href="http://partie1exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 5 Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
            Donner une valeur à cette variable et l'afficher.</p>  
        <!-- Ajout d'un paragraphe dans lesquels j'ouvre mes balises php séparées par des sauts de ligne -->
        <p>
            <?php
            // déclaration d'une variable int cast en type entier avec rien en valeur et affichage
            $int = (int) NULL;
            echo $int;
            ?>
            <br/>
            <?php
            // ajout d'une valeur à la variable et affichage
            $int += 42;
            echo $int;
            ?>
        </p>
    </body>
</html>