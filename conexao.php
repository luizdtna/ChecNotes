<?php

//Credenciais de acesso ao BD
define('HOST', 'localhost:3308');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'tabela');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);