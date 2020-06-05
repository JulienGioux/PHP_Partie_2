<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 7</title>
</head>

<body>
    <?php
        $isOk = TRUE;
        $messageOK = ($isOk == FALSE) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>
    <p><?php echo $messageOK; ?></p>
    <?php
        $isOK = FALSE;
        if ($isOK == FALSE) 
        { 
            $messageOK = 'c\'est pas bon !!!';
         } else {
            $messageOK = 'c\'est ok !!';
         }
    ?>
    <p><?php echo $messageOK; ?></p>
</body>

</html>