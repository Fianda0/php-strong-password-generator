<?php
$testo = $_GET['testo']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1>Il testo è lungo:</h1>
    <?php
    for ($i = 1; $i <= $testo; $i++) {
        echo 'x';
    }
    ?>
</body>

</html>