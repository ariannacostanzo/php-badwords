<?php

$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
$paragraph_length = strlen($paragraph);
$censured_paragraph = str_replace($word, '***', $paragraph);
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
        Il tuo paragrafo è: <strong> <?php echo $paragraph ?> </strong>ed è lungo: <strong> <?php echo $paragraph_length ?> </strong> caratteri.
    </p>
    <p>
        Il tuo paragrafo censurato è: <strong> <?php echo $censured_paragraph ?> </strong> ed è lungo: <strong> <?php echo strlen($censured_paragraph) ?> </strong> caratteri.
    </p>
</body>
</html>