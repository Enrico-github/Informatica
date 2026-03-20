<?php

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
<form action="elabora3.php" method="post">
    <h1>LOL</h1>
    <label for="nome">Nome:</label> <input type="text" name="nome" required> <br><br>
    <label for="password">Password</label> <input type="password" name="password" required> <br><br>
    <label for="email">Email:</label> <input type="email" name="email" required> <br><br>
    <label for="eta">Età:</label> <input type="number" name="eta" required> <br><br>
    <label for="sesso">Sesso:</label>
    <input type="radio" name="sesso" value="maschio"> Maschio
    <input type="radio" name="sesso" value="femmina"> Femmina <br><br>
    <label for="corsi">Corsini:</label>
    <input type="checkbox" name="corsi[]" value="PHP"> PHP
    <input type="checkbox" name="corsi[]" value="Java"> Java
    <input type="checkbox" name="corsi[]" value="SQL"> SQL <br><br>
    <label for="citta">Città:</label>
    <select name="citta" >
        <option value="Roma">Roma</option>
        <option value="Milano">Milano</option>
        <option value="Napoli">Napoli</option>
        <option value="Venezia">Venezia</option>
    </select> <br><br>
    <label for="nazionalita">Nazionalità:</label>
    <select name="nazionalita[]" multiple size="2" >
        <option value="Rumena">Rumena</option>
        <option value="Italiana">Italiana</option>
        <option value="Cinese">Cinese</option>
        <option value="India">India</option>
    </select> <br><br>
    <label for="area">Parlaci di Corsini...</label>
    <textarea name="area" rows="1"></textarea><br><br>
    <button type="submit">Invia</button>

</form>
</body>
<script></script>
</html>
