<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4 php Partie 5</title>
    </head>
    <body>
        <?php
        $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        $month[7] = 'août';
        echo $month[7]; /* On afficher le 5eme index du tableau. */
        ?>
    </body>
</html>