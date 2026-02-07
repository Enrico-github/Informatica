<?php   //configurazione del database   separation of concern
return [
    'dsn'=>'mysql:host=192.168.60.144;dbname=enrico_prearo_itis;charset=utf8mb4',
    'username'=>'enrico_prearo',
    'password'=>'scongiureremo.dissensi.',
    'options' =>
    [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]
];
