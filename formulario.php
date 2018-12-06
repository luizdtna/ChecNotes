<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>METLformulário</title>
</head>
<body>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<center><h1 class="well">Formulário de cadastro</h1></center>

    <h4 class="well">Prencha os seus dados no formulário abaixo</h4>

	<div class="col-lg-12 well">
	<div class="row">
				<form method="post" action="formulario.php">

					<?php include('errors.php'); ?>

					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nome</label>
								<input type="text" name="username" placeholder="Digite seu nome" class="form-control" value="<?php echo $username; ?>">
							</div>
							<div class="col-sm-6 form-group">
								<label>Sobrenome</label>
								<input type="text" name="snome" placeholder="Digite seu sobrenome" class="form-control" value="<?php echo $snome; ?>">
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Data de nascimento</label>
								<input type="text" name="dia" placeholder="Digite o dia" class="form-control" value="<?php echo $dia; ?>">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Mês</label>
								<input type="text" name="mes" placeholder="Digite o mês" class="form-control" value="<?php echo $mes; ?>">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Ano</label>
								<input type="text" name="ano" placeholder="Digite o ano" class="form-control" value="<?php echo $ano; ?>">
							</div>		
						</div>
						<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="Digite seu email" class="form-control" value="<?php echo $email; ?>">
					</div>	
						<div class="form-group">
						<label>Telefone</label>
						<input type="text" name="telefone" placeholder="Digite seu número de telefone" class="form-control" value="<?php echo $telefone; ?>">
					</div>		
									
						<div class="form-group">
							<label>Endereço atual</label>
							<!--<textarea  placeholder="Digite seu endereço.." rows="3" class="form-control"></textarea>-->
							<input type="text" name="endereco" placeholder="Digite seu endereço (Rua e Número)" class="form-control" value="<?php echo $endereco; ?>">
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Cidade</label>
								<input type="text" name="cidade" placeholder="Digite o nome da cidade" class="form-control" value="<?php echo $cidade; ?>">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Estado</label>
								<input type="text" name="estado" placeholder="Digite o nome do estado" class="form-control" value="<?php echo $estado; ?>">
							</div>	
							<div class="col-sm-4 form-group">
								<label>País</label>
								<input type="text" name="pais" placeholder="Digite o nome do país" class="form-control" value="<?php echo $pais; ?>">
							</div>		
						</div>
						  
						
						<div class="row">
							<div class="col-sm-4 form-group">
							
								<label>Universidade</label>
								<input type="text" name="universidade" placeholder="Digite o nome do curso" class="form-control" value="<?php echo $universidade; ?>">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Curso</label>
								<input type="text" name="curso" placeholder="Digite o nome do curso" class="form-control" value="<?php echo $curso; ?>">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Ano de início do curso</label>
								<input type="text" name="anos" placeholder="Digite o ano do início do curso" class="form-control" value="<?php echo $anos; ?>">
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
						</div>	<br/>				
					
					<!--<div class="form-group">
						<label>Website</label>
						<input type="text" placeholder="Enter Website Name Here.." class="form-control">
					</div>-->
					<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
					<!--<button type="submit" class="btn btn-lg btn-info" style="width:10%    ">Enviar</button>	-->				
					</div>
				</form> 
				</div>
	</div>
	</div>
	</body>
</html>