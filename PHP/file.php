<?php
echo getcwd();  //current working directory
echo "<br>";
echo DIRECTORY_SEPARATOR;   //rende lo script cross platform
$path = getcwd();
echo "<br>";
echo is_file($path.DIRECTORY_SEPARATOR."provaFile.txt")?"true" : "false";   //verifica se il file è presente nella directory
echo "<br>";
echo is_dir($path.DIRECTORY_SEPARATOR."dir1")?"true" : "false";
echo "<br>";
echo is_dir($path.DIRECTORY_SEPARATOR."dir2")?"true" : "false";
$items = scandir($path.DIRECTORY_SEPARATOR."dir2");
echo "<br>";
echo '<h1>file nella mia directory</h1>';
echo '<ul>';
foreach ($items as $Items)
    {
        echo '<li>'.$Items;
    }
echo '</ul>';
$file1 = fopen("nome.txt", "w");    //apre il file, se non esiste lo crea
fwrite($file1,"ciao a tutti");  //scrive ciò che è presente nel secondo argomento dentro il file indicato nel primo argomento
fclose($file1); //chiude il file
