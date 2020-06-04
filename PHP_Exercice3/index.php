<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 3</title>
</head>
<body>
    <?php 
    $age = 18;
    $gender = "Femme";

    switch (TRUE) {
        case $age >= 18 && $gender == "Homme" :
            print ("Vous êtes un homme et vous êtes majeur");
        break;
        case $age < 18 && $gender == "Homme" :
            print ("Vous êtes un homme et vous êtes mineur");
        break;
        case $age >= 18 && $gender == "Femme" :
            print ("Vous êtes une femme et vous êtes majeur");
        break;
        case $age < 18 && $gender == "Femme" :
            print ("Vous êtes une femme et vous êtes mineur");
        break;
        default:
            print ("Il y a une erreur quelque part...");
            break;
    }

    ?>
</body>
</html>