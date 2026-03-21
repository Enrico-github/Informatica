<?php
if(isset($_POST["nome"])){
    setcookie( //Creazione cookie
        "user", //Nome del cookie
        $_POST["nome"], //Valore
        //Configurazione cookie
        [
            "expires" => time()+36000, //Scadenza cookie
            "path" => "/",
            "secure" => false, //Trasmetto i cookie anche se la comunicazione non è HTTPS
            "httponly" => true, //I cookie sono leggibili sono dagli header HTTP
            "samesite" => "Lax"
        ]
    );
    $user = $_POST["nome"];
}else{
    $user = $_COOKIE["nome"]; //Lo leggo dal client perchè ce l'ho già
}
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
<p>Ciao <?= $user  ?> questa è la pagina action</p>
<br>
<a href="show.php">Link per la pagina show</a>

</body>
</html>
