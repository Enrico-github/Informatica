<?php
$user = $_COOKIE["user"] ?? "";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Ciao <?= $user  ?> questa è la pagina show</p>
<br>

<a href="index.php">Link per la pagina index</a>
</body>
</html>
