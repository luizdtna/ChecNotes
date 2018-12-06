<?

include ("server.php");

$query = "SELECT * FROM registo" ;

		$results = mysqli_query($db, $query);

//Verificar se encontrou resultado na tabela "usuarios"
/*if(($results) AND ($results->num_rows != 0)){
	while($row_usuario = mysqli_fetch_assoc($results)){
		echo $row_usuario['id'] . "<br>";
		echo $row_usuario['username'] . "<br>";
		echo $row_usuario['snome'] . "<br>";
		echo $row_usuario['dia'] . "<br>";
		echo $row_usuario['mes'] . "<br>";
		echo $row_usuario['ano'] . "<br>";
		echo $row_usuario['email'] . "<br>";
		echo $row_usuario['telefone'] . "<br>";
		echo $row_usuario['endereco'] . "<br>";
		echo $row_usuario['cidade'] . "<br>";
		echo $row_usuario['estado'] . "<br>";
		echo $row_usuario['pais'] . "<br>";
		echo $row_usuario['universidade'] . "<br>";
		echo $row_usuario['curso'] . "<br>";
		echo $row_usuario['anos'] . "<br>";

	}
}else{
	echo "Nenhum usuário encontrado";
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bootstrap basic table example</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listas dos estudantes</title>
	<style>
.table .thead-light th {
  color: #401500;
  background-color: #FFDDCC;
  border-color: #792700;
}
</style>
</head>
<body><br><br>

	<center><h1>Dados dos estudantes cadastrados</h1></center><br><br>
	<div class="container">
<center><table class="table table-bordered table-striped table-hover" border="">
	 <thead class="thead-light">
	<tr>
		
		<th>Código</th>
		<th>Nome</th>
		<th>Sobrenome</th>
		<!--<th>Dia</th>
		<th>Mês</th>
		<th>Ano</th>-->
		<th>E-mail</th>
		<!--<th>Telefone</th>
		<th>Endereço</th>
		<th>Cidade</th>
		<th>Estado</th>
		<th>País</th>-->
		<th>Universidade</th>
		<th>Curso</th>
		<th>Ano de início</th>
		
	</tr>
	</thead>
	
	<?php if(($results) AND ($results->num_rows != 0)){ ?>
    <?php while($row_usuario = mysqli_fetch_assoc($results)){ ?>
     <tr>
     	<td><?php echo $row_usuario['id'] . "<br>"; ?></td>
        <td><?php echo $row_usuario['username'] . "<br>"; ?></td>
		<td><?php echo $row_usuario['snome'] . "<br>";  ?></td>
		<!--<td><?php #echo $row_usuario['dia'] . "<br>"; ?></td>
		<td><?php #echo $row_usuario['mes'] . "<br>";?></td>
		<td><?php #echo $row_usuario['ano'] . "<br>"; ?></td>-->
		<td><?php echo $row_usuario['email'] . "<br>"; ?></td>
		<!--<td> <?php# echo $row_usuario['telefone'] . "<br>";?></td>
		<td><?php# echo $row_usuario['endereco'] . "<br>";?></td>
		<td><?php #echo $row_usuario['cidade'] . "<br>";?></td>
		<td><?php #echo $row_usuario['estado'] . "<br>";?></td>
		<td><?php #echo $row_usuario['pais'] . "<br>";?></td>-->
		<td><?php echo $row_usuario['universidade'] . "<br>";?></td>
		<td><?php echo $row_usuario['curso'] . "<br>";?></td>
		<td><?php echo $row_usuario['anos'] . "<br>";?></td>
     </tr>
<?php }?>
	
     <?php 
}else{
	echo "Nenhum usuário encontrado";}?>
</table></center>
</body>
</html>
