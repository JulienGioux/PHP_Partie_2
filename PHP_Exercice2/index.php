<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 2</title>
</head>
<body>
    <?php 
    $isEasy = FALSE;
    if ($isEasy) {
        print "C'est facile !!";
    } else {
        print "C'est difficile !!";
    };

    $isEasy = TRUE;
    echo ($isEasy) ? 'C\'est facile !!' : 'C\'est difficile !!';
    ?>
</body>
</html>