<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 8</title>
</head>

<body>
    <?php
        $isOk = TRUE;
        $messageOK = ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    ?>
    <p><?php echo $messageOK; ?></p>
    <?php
        $isOK = FALSE;
        if ($isOK) 
        { 
            $messageOK = 'c\'est ok !!';
         } else {
            $messageOK = 'c\'est pas bon !!!';
         }
    ?>
    <p><?php echo $messageOK; ?></p>
</body>

</html>