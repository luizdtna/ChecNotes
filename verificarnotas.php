<?php
session_start();
include ("server.php");
$id_registo = $_GET['id'];
$nome_registo = $_GET['nome'];
$query = "SELECT * FROM registo WHERE id = '$id_registo'; ";
$results = mysqli_query($db, $query);


/*$sql3 = "SELECT id FROM registo WHERE id = '$id_registo'; ";
$resultado3 = mysqli_query($db, $sql3);
$dados2 = mysqli_fetch_array($resultado3);
$id_registo2 = $dados2['id'];*/

$sql = "SELECT id as 'id_registo', username, id_arquivo, nome_arquivo, caminho_arquivo from registo join arquivos on id = id_aluno where username = '$nome_registo';";
$resultado2 = mysqli_query($db, $sql);
//$dados = mysqli_fetch_array($resultado2);
//$id_aluno = $dados['id_registo'];

//$nomeArquivo =  'arquivos/'.$id_aluno.'';
#echo $dados['username'];
?>
<!DOCTYPE html>
<html>

<head>
  <style>
.center {
    margin: auto;
    width: 60%;
    border: 4px solid #73AD21;
    padding: 100px;

}
.table .thead-light th {
  color: #401500;
  background-color: #FFDDCC;
  border-color: #792700;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>METL Meus Aproveitamentos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini">


<?php include_once('aside_Nav_Fiscal.php') ?>
 
<section class="col-lg-12 connectedSortable">

  <div class="content-wrapper">
  <br>
    <!-- Content Header (Page header) -->
   
    <center><h1>Dados do estudante <?php  echo $_GET['nome']  ?> </h1></center><br><br>
    <div class="container col-sm-5">
      <center>
        <table class="table table-bordered table-striped table-hover" border="">
          <thead class="thead-light">
            <tr>
            
              <th>Nome do Arquivo</th>
              
              <th>Arquivo</th>
          
            </tr>
          </thead>
        
          <?php 
            if(($results) AND ($results->num_rows != 0)){ 
            while($dados = mysqli_fetch_array($resultado2)){ 
          ?>
          <tr>
           
            <td><?php echo $dados['nome_arquivo'] . "<br>"; ?></td>
            <td><a href="<?php echo $dados['caminho_arquivo']; ?>" download><button class="btn btn-info">baixar</button></a><button class="btn btn-danger">Deletar</button></td>
          </tr>
          
          <?php }?>
        
           <?php 
          }else{
            echo "Nenhum usuário encontrado";}?>
        </table>
      </center>


    </div>
  </div>
</section>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
