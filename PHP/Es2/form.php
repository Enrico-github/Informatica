<?php
$nCorsi = 0;
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
<form method="POST" action="corsi.php">
<p>Quanti corsi desideri inserire? (max 10)</p>
<input<?php $nCorsi ?>>

<button type="submit">INVIA</button>
<script src="script.js"></script>
</body>
</html>
