<?php

session_start();
include_once('verificaSessionAluno.php');
include_once('server.php');
class classeDeArquivos 
  {
    
    public function armazenarArquivoAluno($nomeArq, $caminho, $id_aluno){
      $sql3 = "INSERT INTO `arquivos` (`nome_arquivo`, `caminho_arquivo`, `id_aluno`) VALUES ('$nomeArq', '$caminho', '$id_aluno');";
      mysqli_query($GLOBALS['db'], $sql3);

    }

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    .center {
      margin: auto;
      width: 55%;
      border: 10px solid #73AD21;
      padding: 70px;
    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CheckNotes</title>
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
  </head>
  <body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="aluno.php" class="nav-link">Home</a>
        </li>
        
      </ul>
     
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
   <?php include_once('asideAluno.php') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <center><h2>Meus Aproveitamentos</h2>
         </center><br>
         <div class="center">
            <?php
              if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
              }
              if(isset($_POST['SendCadImg'])){ //Verifica se o botão enviar_form foi pressionado
                  $formatosPermitidos = array("png", "jpeg", "jpg", "gif", "txt"); 
                  var_dump($_FILES);
                  $extencao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); //armazena a extenção (png, jpeg...)
                  if(in_array($extencao, $formatosPermitidos)){ // Verifica se a extenção está no array de axtenções
                    //mkdir('pasta2', 0755);

                    $pasta = "arquivos/".$_SESSION['id']."/provas/";

                    $temporario = $_FILES['arquivo']['tmp_name'];
                    $novoNome = uniqid().".$extencao"; //concatenar o novo nome para o arquivo do upload
                    if(move_uploaded_file($temporario, $pasta.$novoNome)){
                      $caminho = $pasta.$novoNome;
                      echo "upload feito com sucesso";

                      $classeDeArq = new classeDeArquivos();
                      $classeDeArq->armazenarArquivoAluno($_POST['nomeArquivo'], $caminho, $_SESSION['id']);
                    }else{
                      echo "ERRO";
                    }
                  }else{
                    echo "Formato invalido";
                  }
              }


            ?>


            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <label>Nome do arquivo:</label>
                <input type="text" name="nomeArquivo" placeholder="Digitar o nome" required><br><br>
                
                <label>Escolher o arquivo</label>
                <input type="file" name="arquivo"><br><br>
                
                <input name="SendCadImg" class="btn btn-flat btn-primary" type="submit" value="Enviar">
            </form>
          </div>
      </div>
    </div>

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
