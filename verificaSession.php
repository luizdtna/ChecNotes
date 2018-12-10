<?php 


if(!isset($_SESSION['success'])){
	header('location: logarfuncionario.php');
}else{
	echo 'sucesso!!!!!';
}

?>