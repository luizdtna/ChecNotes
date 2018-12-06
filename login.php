<?php include('server.php') ?>
 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<center><h1>Acessar o sistema</h1></center>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								 
								<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
									<?php include('errors.php'); ?>
									<div class="form-group">
											<label for="userEmail">Email</label>
<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Digite seu email">
									</div>
									<div class="form-group">
										<label for="userEmail">Senha</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Digite sua senha">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Lembra Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<button  id="btnLogin" type="submit" class="btn btn-flat btn-primary" name="btnLogin" value="Entrar" onclick="miolo.doPostBack('btnLogin:click','','');" style="width:100%    ">Acessar</button><br><br>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Esqueceu a senha?</a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="formulario.php" tabindex="5" class="forgot-password">Sou novo</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	