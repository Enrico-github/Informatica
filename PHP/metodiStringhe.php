<?php
echo strlen("hello");   //lunghezza della stringa
echo strrev("hello");   //restituisce la stringa al contrario
echo strtolower("HELLO");    //restituisce la stringa in minuscolo
echo strtoupper("hello");   //restituisce la stringa in maiuscolo
echo ucfirst("hello world");    //restituisce la prima stringa con la prima lettera maiuscola
echo ucwords("hello world");    //restituisce ogni stringa con la prima lettera maiuscola
echo trim("  hello  ");     //restituisce la stringa rimuovendo gli spazi all'inizio e alla fine
echo ltrim("  hello");      //restituisce la stringa rimuovendo gli spazi a sinistra
echo rtrim("hello  ");      //restituisce la stringa rimuovendo gli spazi a destra
$stringhe = explode(" ", "hello world");    //restituisce un array contenente le stringhe una per posizione, come primo argomento si mette il delimitatore di stringa
echo implode(" ", ["hello", "world"]);  //restituisce una stringa contenente tutti gli elementi dell'array separandoli con ciò che è contenuto nel primo argomento
echo str_replace("planet", "world", "hello planet");    //restituisce la stringa con il primo argomento che viene sostituito dal secondo
echo substr("hello", 1, 3); //restituisce la stringa tenendo il numero di caratteri presenti nel terzo argomento partendo dal carattere indicato nel secondo argomento
echo strpos("hello world", "o");    //restituisce la posizione del carattere indicato nel secondo argomento partendo dall'inizio
echo strrpos("hello world", "o");   //restituisce la posizione del carattere indicato nel secondo argomento partendo dalla fine
echo strstr("hello@world.com", "@");    //restituisce la stringa partendo dal carattere inserito nel secondo argomento
echo stristr("hello WoRlD", "world");   //restituisce la stringa presente nel secondo argomento se presente nella stringa senza considerare minuscole o maiuscole
$stringa = sprintf("hello world %d", 2);    //restituisce una stringa formattata => per visualizzarla si fa:
echo $stringa;
printf("hello world %d", 2);    //stampa una stringha
echo number_format(123456789, 3, ',', '.'); //restituisce un numero separando le miglia da un punto e mette tanti decimali quanti indicati nel secondo argomento
echo addslashes("hello world'");    //restituisce la stringa con un backslash al posto dei caratteri speciali: (' " \ null)
echo stripslashes("hello world/");  //restituisce la stringa rimuovendo i backslashes
