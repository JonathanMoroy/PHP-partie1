<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 8</title>
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
                <li><a href="http://partie1exo6">Exercice 6</a></li>
                <li><a href="http://partie1exo7">Exercice 7</a></li>
            </ul>
        </nav>
        <p>##Exercice 8 Créer 3 variables.
            Dans la première mettre le résultat de l'opération 3 + 4.
            Dans la deuxième mettre le résultat de l'opération 5 * 20.
            Dans la troisième mettre le résultat de l'opération 45 / 5.
            Afficher le contenu des variables.</p>  
        <!-- Ajout d'un paragraphe dans lesquels j'ouvre mes balises php séparé par des sauts de lignes -->
        <p>
            <?php
            // déclaration de mes variables et affichage
            $addition = 3 + 4;
            $multiplication = 5 * 20;
            $division = 45 / 5;
            echo $addition;
            ?>
            <br/>
            <?php
            echo $multiplication;
            ?>
            <br/>
            <?php
            echo $division;
            ?>
        </p>
    </body>
</html>