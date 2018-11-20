<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7 php Partie 5</title>
    </head>
    <body>
        <?php
        $Hauts_de_France = array(
            02 => 'Aisne',
            59 => 'Nord',
            60 => 'Oise',
            62 => 'Pas-de-Calais',
            80 => 'Somme');
        $Hauts_de_France[51] = 'Marne';
        
        echo $Hauts_de_France[51]
        ?>
    </body>
</html>