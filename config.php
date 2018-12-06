<?php
$host = "localhost";
$user = "root";
$pass = "timorleste";
$banco = "tabela";
$conecta = mysql_connect($host, $user, $pass, $banco) or die (mysql_error());
$selBanco = mysql_select_db($banco) or die (mysql_error());

?>