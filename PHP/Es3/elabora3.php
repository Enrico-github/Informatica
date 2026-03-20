<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "ACCESSO NON VALIDO";
    exit();
}

$nome = $_POST['nome'] ?? "";
$password = $_POST['password'] ?? "";
$email = $_POST['email'] ?? "";
$eta = $_POST['eta'] ?? "";
$sesso = $_POST['sesso'] ?? "";
$corsi = $_POST['corsi'] ?? [];
$citta = $_POST['citta'] ?? "";
$nazionalita = $_POST['nazionalita'] ?? [];
$area = $_POST['area'] ?? "";

$hash = PASSWORD_HASH($password, PASSWORD_DEFAULT);


$attributi = [
    "nome",
    "password",
    "email",
    "eta",
    "sesso",
    "corsi",
    "citta",
    "nazionalita",
    "area"
];

$dati = [
    "nome" => $nome,
    "password" => $hash,
    "email" => $email,
    "eta" => $eta,
    "sesso" => $sesso,
    "corsi" => $corsi,
    "citta" => $citta,
    "nazionalita" => $nazionalita,
    "area" => $area
];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<table>

    <tr>
        <?php foreach($attributi as $attributo): ?>
            <th> <?= $attributo?> </th>
        <?php endforeach ?>
    </tr>

    <tr>
        <?php foreach ($dati as $dato): ?>
            <th>
                <?php if (is_array($dato)) {
                echo implode(", ", $dato);
                } else {
                echo $dato;
                } ?>
            </th>
        <?php endforeach ?>
    </tr>

</table>
</body>
</html>
