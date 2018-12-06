<?php
include ("server.php");

$query = "SELECT id, username, snome, email, universidade, curso, pais, anos   FROM registo WHERE pais='Brasil' order by username, id ASC "  ;
$results = mysqli_query($db, $query);


/*$sql = "select id as 'id_aluno', username, id_arquivo, nome_arquivo, caminho_arquivo from registo join arquivos on id = id_aluno;";
$resultado2 = mysqli_query($db, $sql);
$dados = mysqli_fetch_array($resultado2);*/

?>
<table class="table table-bordered table-striped table-hover" border="">
  <thead class="thead-light">
  <tr>
    
     <th>Nome</th>
    <th>Sobrenome</th>
    <th>Email</th>
   <th>País onde estuda</th>
   <th>Nome de Universidade</th>
   <th>Nome do curso</th>
   <th>Ano de início do curso</th>
   <th>Aproveitamento</th>
    
  </tr>
  </thead>
  
  <?php if(($results) AND ($results->num_rows != 0)){ ?>
    <?php while($row_usuario = mysqli_fetch_assoc($results)){ ?>
     <tr>
    
    <td><?php echo $row_usuario['username'] . "<br>"; ?></td>
    <td><?php echo $row_usuario['snome'] . "<br>";  ?></td>
    
    <td><?php echo $row_usuario['email'] . "<br>";?></td>
    <td><?php echo $row_usuario['pais'] . "<br>";?></td>
    <td><?php echo $row_usuario['universidade'] . "<br>";?></td>
    <td><?php echo $row_usuario['curso'] . "<br>";?></td>
     <td><?php echo $row_usuario['anos'] . "<br>";?></td>
    
    
    <!--<td> <a href="detalhe.php" > <?php echo " Notas "?></a></td>-->
    <td> <a href="verificarnotas.php?id=<?php echo $row_usuario['id']?>&nome=<?php echo $row_usuario['username'] ?>">Notas</a></td>

     </tr>
<?php }?>
  
     <?php 
}else{
  echo "Nenhum usuário encontrado";}?>
</table>