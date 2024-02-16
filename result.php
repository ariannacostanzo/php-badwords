<?php

$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
$paragraph_length = strlen($paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>
    <p>
        La tua frase è: <strong> <?php echo $paragraph ?> </strong>ed è lunga: <strong> <?php echo $paragraph_length ?> </strong> caratteri.
    </p>
    <p>
        La tua frase censurata è: <strong>  </strong>
    </p>
</body>
</html>