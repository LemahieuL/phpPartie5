<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 9 php Partie 5</title>
    </head>
    <body>
        <?php
        $Hauts_de_France = array(
            02 => 'Aisne',
            59 => 'Nord',
            60 => 'Oise',
            62 => 'Pas-de-Calais',
            80 => 'Somme');
        foreach ($Hauts_de_France as $paragraph){
            ?><p><?= $paragraph?></p><?php
        }
        ?>
    </body>
</html>