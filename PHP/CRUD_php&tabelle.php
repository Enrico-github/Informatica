<?php
$db =  new PDO(
    'mysql:host=192.168.60.144;dbname=enrico_prearo_itis;charset=utf8mb4',
  'enrico_prearo',
  'scongiureremo.dissensi.',
  [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]
);
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
?>
