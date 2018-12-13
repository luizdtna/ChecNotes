<?php 

include_once('server1.php');
//$password = md5($password_1);
$id = $_SESSION['id'];
//$sql = "UPDATE registo set password = '$password' WHERE id = '$id'";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ChecNotes</title>
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
 
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="funcionario.php"><img src="img/core-img/logo4.jpg" alt=""></a>
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
    <div class="container" style="float: right;>
    <form method="post" action="cadastrafuncionario.php">
      	<div class="col-lg-8 well">
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
                              <br/>               
			</div>         
		</div>
	</form>
</div>





</body>
</html>