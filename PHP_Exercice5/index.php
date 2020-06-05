<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 5</title>
</head>
<body>
    <?php
        $gender = "Femme";
        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

        $gender = "Homme";
        if ($gender != 'Homme') {
            print ('C\'est une développeuse !!!');
        } else {
            print ('C\'est un développeur !!!');
        }
        

    ?>
</body>
</html>