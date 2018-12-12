<?php 
session_start();
include_once('verificaSessionAluno.php');
include_once ('server.php'); 

//Fazer a pesquisa so aluno
$email = $_SESSION['email'];
$sql = "SELECT * FROM registo WHERE email='$email' ;";
$resultado = mysqli_query($db, $sql);
$dados = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>CheckNotes</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/icone.jpg">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

    <body>
        <!-- ##### Preloader ##### -->
        <div id="preloader">
            <i class="circle-preloader"></i>
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">

            <!-- Top Header Area -->
            <div class="top-header">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 h-100">
                            <div class="header-content h-100 d-flex align-items-center justify-content-between">
                                <div class="academy-logo">
                                    <a href="aluno.php"><img src="img/core-img/logo4.jpg" alt=""></a>
                                </div>
                                <div class="login-content">
                                    <!--<a href="#">Register / Login</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar Area -->
            <div class="academy-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                       
                    </div>
                </div>
            </div>
        </header><br/>
        <!-- ##### Header Area End ##### -->

        <!-- ##### Hero Area Start ##### -->
        <div class="container">
        <center><h1 class="well">Dados do aluno</h1></center>

        <div class="col-lg-12 well">
            <div class="row">
                    <form method="post" action="dadosaluno.php">

                       <?php include('errors.php'); ?>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Nome</label>
                                    <input type="text" name="username" class="form-control" value="123" readonly>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Sobrenome</label>
                                    <input type="text" name="snome" class="form-control"  value="<?php echo $dados['snome']; ?>" readonly>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Data de nascimento</label>
                                    <input type="text" name="dia" placeholder="Digite o dia" class="form-control" readonly>
                                </div>  
                                <div class="col-sm-4 form-group">
                                    <label>Mês</label>
                                    <input type="text" name="mes" placeholder="Digite o mês" class="form-control" readonly>
                                </div>  
                                <div class="col-sm-4 form-group">
                                    <label>Ano</label>
                                    <input type="text" name="ano" placeholder="Digite o ano" class="form-control" readonly>
                                </div>      
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Digite seu email" class="form-control" value="<?php echo $dados['email']; ?>">
                            </div>  
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" name="telefone" placeholder="Digite seu número de telefone" class="form-control" value="<?php echo $dados['telefone']; ?>">
                            </div>      
                                        
                            <div class="form-group">
                                <label>Endereço atual</label>
                                <input type="text" name="endereco" placeholder="Digite seu endereço (Rua e Número)" class="form-control" value="<?php echo $dados['endereco']; ?>">
                            </div>  
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade" placeholder="Digite o nome da cidade" class="form-control" value="<?php echo $dados['cidade']; ?>">
                                </div>  
                                <div class="col-sm-3 form-group">
                                    <label>Estado</label>
                                    <input type="text" name="estado" placeholder="Digite o nome do estado" class="form-control" value="<?php echo $dados['estado']; ?>">
                                </div>  
                                <div class="col-sm-3 form-group">
                                    <label>País</label>
                                    <input type="text" name="pais" placeholder="Digite o nome do país" class="form-control" value="<?php echo $dados['pais']; ?>" readonly>
                                </div>      
                            </div>
                              
                            
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                
                                    <label>Universidade</label>
                                    <input type="text" name="universidade" placeholder="Digite o nome do curso" class="form-control" value="<?php echo $dados['universidade']; ?>" readonly>
                                </div>  
                                <div class="col-sm-3 form-group">
                                    <label>Curso</label>
                                    <input type="text" name="curso" placeholder="Digite o nome do curso" class="form-control" value="<?php echo $dados['curso']; ?>" readonly>
                                </div>  
                                <div class="col-sm-3 form-group">
                                    <label>Ano de início do curso</label>
                                    <input type="text" name="anos" placeholder="Digite o ano do início do curso" class="form-control" value="<?php echo $dados['anos']; ?>" readonly>
                                </div>      
                            </div>
                        </div>
                            <div class="col-sm-12">
                            <div class="row">

                                <div class="col-sm-3 form-group">
                                    <label>Senha atual</label>
                                    <input type="password" name="password_1" placeholder="Senha atualizar-reg" class="form-control">
                                </div>      
                                <div class="col-sm-3 form-group">
                                    <label>Confirmar senha</label>
                                    <input type="password" name="password_2" placeholder="Confirmar sua senha" class="form-control">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Repetir nova senha</label>
                                    <input type="password" name="password_2" placeholder="Confirmar sua senha" class="form-control">
                                </div>


                            </div>  <br/>               
                        
                        <!--<div class="form-group">
                            <label>Website</label>
                            <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                        </div>-->
                            </div>
                        <div class="input-group">
                            <div>
                                <button type="submit" class="btn" name="atualizar-reg">Atualizar</button>
                            </div>
                        </div>
                    </form> 
            </div>
        </div>
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
    </body>

</html>