<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 6</title>
</head>

<body>
    <?php
        $age = 18;
        $messageAge = ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>
    <p><?php echo $messageAge; ?></p>
    <?php
        $age = 17;
        if ($age >= 18) 
        { 
            $messageAge = 'Tu es majeur';
         } else {
            $messageAge = 'Tu n\'es pas majeur';
         }
    ?>
    <p><?php echo $messageAge; ?></p>
</body>

</html>