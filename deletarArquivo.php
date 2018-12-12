<?php 

include('server.php');

$caminho = $_GET['caminho'];
$id = $_GET['id_registo'];
echo $caminho;
$sql4 = "DELETE FROM `arquivos` WHERE `arquivos`.`caminho_arquivo` = '$caminho' ";

mysqli_query($db,$sql4);

header('location: funcionario.php')

 ?>