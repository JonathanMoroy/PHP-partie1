<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 7</title>
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
                <li><a href="http://partie1exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 7 Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
            Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>  
        <!-- Ajout d'un paragraphe dans lesquels j'ouvre mes balises php -->
        <p>
            <?php
            // déclaration de mes variables et affichage inséré entre des strings
            $prenom = 'Jonathan';
            $nom = 'Moroy';
            $age = 26;
            echo 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . 'ans.';
            ?>
        </p>
    </body>
</html>