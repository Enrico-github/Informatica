<?php
$dbconfig = require 'configuration/db_configuration.php';
$db =  new PDO($dbconfig['dsn'],$dbconfig['username'],$dbconfig['password'],$dbconfig['options']);
/*
$query = 'SELECT * FROM studenti';
try{
    $atmt = $db->prepare($query);   //restituisce un oggetto pdo statement
    $atmt -> execute();

    while($user = $atmt->fetch()) {
        echo "nome" . $user->nome . "<br>";
        echo "cognome" . $user->cognome . "<br>";
        echo "media" . $user->media . "<br>";
        echo "data_iscrizione" . $user->data_iscrizione . "<br>";
        echo "<hr>";
    }
    $atmt->closeCursor();
}catch (PDOException $e){
    echo "db error occurred";
}
*/
//READ
$query = 'SELECT media,cognome FROM studenti WHERE nome = :nome';
try{
    $atmt = $db->prepare($query);
    $atmt -> bindValue(':nome','Antonio',PDO::PARAM_STR);       //unisco i dati evitando SQL injection
    $atmt -> execute();
    while($user = $atmt->fetch()) {
        echo "cognome: " . $user->cognome . "<br>";
        echo "media: " . $user->media . "<br>";
        echo "<hr>";
    }
    $atmt->closeCursor();
}catch (PDOException $e){
    echo "db error occurred";
}
//CREATE
$query = "insert into studenti (nome, cognome, media, data_iscrizione) 
values (:nome, :cognome, :media, NOW())";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> bindValue(":nome", "Lucy", PDO::PARAM_STR);
    $stmt -> bindValue(":cognome", "Taylor", PDO::PARAM_STR);
    $stmt -> bindValue(":media", 8, PDO::PARAM_INT);
    $stmt -> execute(); // Esegue la query

    echo "Insert succssful <br>";
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}


$query = "select * from studenti";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> execute(); // Esegue la query

    while($user = $stmt->fetch()){ // Legge una riga alla volta
        echo "nome: ". $user -> nome. "<br>";
        echo "cognome: ". $user -> cognome. "<br>";
        echo "media: ". $user -> media. "<br>";
        echo "data_iscrizione: ". $user -> data_iscrizione. "<br>";
        echo "<hr>";
    }
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}
$query = 'UPDATE studenti
SET media = :media
WHERE nome = :name';

try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':name', 'Antonio', PDO::PARAM_STR);
    $stmt->bindValue(':media', 10, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() === 0) {
        echo "No rows were updated.";
    } else {
        echo "Update successful.";
    }
    echo '<br>';
    $stmt->closeCursor();
} catch (PDOException $e) {
    echo "A database error occurred. Please try again later.";
    echo '<br>';
    echo $e;
    echo '<br>';
}
//DELETE
$query = "delete from studenti 
    where nome = :nome";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> bindValue(":nome", "Lucy", PDO::PARAM_STR);
    $stmt -> execute(); // Esegue la query

    if($stmt -> rowCount() === 0){
        echo "Delete failed: no rows matched the given name";
    }else{
        echo "Record deleted";
    }
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}
?>
