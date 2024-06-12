<?php
include './function.php';

$testo = $_GET['testo'];
$password = '';
$random = '';
$minuscole = 'abcdefghijklmnopqrstuvxyz';
$maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVXYZ';
$numeri = '0123456789';
$simboli = '!@#$%^&*()-_=+[{]};:",<.>/?';
$caratteri = $minuscole . $maiuscole . $numeri . $simboli;
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

    <h1>La tua password è:</h1>
    <?php
    for ($i = 1; $i <= $testo; $i++) {
        $random = randomNumber(0, strlen($caratteri) - 1);
        $password = $password . $caratteri[$random];
    }
    echo $password;
    ?>
</body>

</html>