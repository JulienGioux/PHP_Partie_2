<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 4</title>
</head>
<body>
    <?php 
    $magnitude = 8;

    switch ($magnitude) {
        case 1 :
            print ("Micro-séisme impossible à ressentir.");
        break;
        case 2 :
            print ("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
        break;
        case 3 :
            print ("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
        break;
        case 4 :
            print ("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
        break;
        case 5 :
            print ("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
        break;
        case 6 :
            print ("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
        break;
        case 7 :
            print ("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
        break;
        case 8 :
            print ("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
        break;
        case 9 :
            print ("Séisme capable de tout détruire sur une très vaste zone.");
        break;
        default:
            print ("Il y a une erreur quelque part...");
            break;
    }

    ?>
</body>
</html>