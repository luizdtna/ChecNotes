<?php include ('server1.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>CheckNotes - Cadastrar</title>
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
                                <a href="logarfuncionario.php"><img src="img/core-img/logo4.jpg" alt=""></a>
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

    <!-- ##### Hero Area Start ##### 
    <?php if (isset($_POST['reg_user'])) {
        $username = $_POST['username'];
        $snome = $_POST['snome'];
        $$email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $password_1 = $_POST['password_1'];
        $sql = "INSERT INTO `funcionario` ( `username`, `snome`, `dia`, `mes`, `ano`, `email`, `telefone`, `endereco`, `cidade`, `estado`, `pais`, `password`) VALUES ('$username', '$snome', 0, 0, 0, '$email',
         '$telefone', '$endereco', '$cidade', '$estado', '$pais', '$password_1')";
         //$sql = "INSERT INTO `funcionario` ( `username`) VALUES ('$_POST[username])";
        if (mysqli_query($bd, $sql)) {
            echo "New record created successfully";
            header("location: logarfuncionario.php");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } ?> -->
    <div class="container" style="float: right;">
    <center><h1 class="col-lg-8 well">Formulário de cadastro</h1></center>

    <h4 class="col-lg-8 well">Prencha os seus dados no formulário abaixo</h4>
    <div class="center">
    <div class="col-lg-8 well">
        <div class="row">
            <form method="post" action="cadastrafuncionario.php">
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Nome</label>
                            <input type="text" name="username" placeholder="Digite seu nome" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Sobrenome</label>
                            <input type="text" name="snome" placeholder="Digite seu sobrenome" class="form-control" >
                        </div>
                    </div>  
                    <div class="row">   
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Digite seu email" class="form-control" >
                    </div>  
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" placeholder="Digite seu número de telefone" class="form-control">
                    </div>                  
                    <div class="form-group">
                        <label>Endereço atual</label>
                        <input type="text" name="endereco" placeholder="Digite seu endereço (Rua e Número)" class="form-control">
                    </div>  
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Cidade</label>
                            <input type="text" name="cidade" placeholder="Digite o nome da cidade" class="form-control">
                        </div>  
                        <div class="col-sm-4 form-group">
                            <label>Estado</label>
                            <input type="text" name="estado" placeholder="Digite o nome do estado" class="form-control">
                        </div>  
                        <div class="col-sm-4 form-group">
                            <label>País</label>
                            <input type="text" name="pais" placeholder="Digite o nome do país" class="form-control" >
                        </div>      
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Senha</label>
                            <input type="password" name="password_1" placeholder="Escolha sua senha" class="form-control">
                        </div>      
                        <div class="col-sm-6 form-group">
                            <label>Confirmar senha</label>
                            <input type="password" name="password_2" placeholder="Confirmar sua senha" class="form-control">
                        </div>  
                    </div>  
                    <br/>               
                    <div class="input-group">
                        <button type="submit" class="btn" name="reg_user">Salvar</button>
                    </div>             
                </div>
            </form> 
        </div>
    </div>
    </div><br/>


   
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