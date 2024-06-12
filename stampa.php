<?php
$testo = $_GET['testo'];
$password = '';
$minucole = 'abcdefghijklmnopqrstuvxyz';
$maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVXYZ';
$numeri = '0123456789';
$simboli = '!@#$%^&*()-_=+[{]};:",<.>/?'
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
        $password = $password . 'x';
    }
    echo $maiuscole[6];
    ?>
</body>

</html>