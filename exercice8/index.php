<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8 php Partie 5</title>
    </head>
    <body>
        <?php
        $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        for ($i = 0; $i < count($month) ;$i++) {/*Je créer une boucle de la taille du tableau pour l'afficher.*/
            ?>
        <p><?= $month[$i]; ?></p>
            <?php
        }
        ?>
    </body>
</html>