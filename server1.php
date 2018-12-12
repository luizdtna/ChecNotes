<?php 


	session_start();

	// variable declaration
	$errors = array();
	// connect to database
	//$db = mysqli_connect('localhost:3308', 'root', '', 'tabela');
	$db = mysql_connect('sql157.main-hosting.eu', 'u539041382_luiz', '123456', 'u539041382_teste');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		
		
		
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$snome = mysqli_real_escape_string($db, $_POST['snome']);
		$dia = 0;
		$mes = 0;
		$ano = 0;
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$telefone = mysqli_real_escape_string ($db, $_POST['telefone']);
		$endereco = mysqli_real_escape_string ($db, $_POST['endereco']);
		$cidade = mysqli_real_escape_string ($db, $_POST['cidade']);
		$estado = mysqli_real_escape_string ($db, $_POST['estado']);
		$pais = mysqli_real_escape_string ($db, $_POST['pais']);
		
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
	
		

		if ($password_1 != $password_2) {
			array_push($errors, "A senha está errada");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$sql = "INSERT INTO funcionario (username, snome, dia, mes, ano, email, telefone, endereco, cidade, estado, pais, password) 
				VALUES('$username', '$snome', 0, 0, 0, '$email', $telefone,'$endereco', '$cidade', '$estado','$pais','$password_1')";
			mysqli_query($db, $sql)  or die((mysqli_error($db)));

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: logarfuncionario.php');
		
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['btnLogin'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Inserir seu email");
		}
		if (empty($password)) {
			array_push($errors, "Inserir sua senha");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM funcionario WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			$sql = "SELECT * FROM funcionario WHERE email = '$email'";
			$resultado = mysqli_query($db, $sql);
			$dados = mysqli_fetch_array($resultado);

			$username = $dados['username']." ".$dados['snome'];
			$email = "";

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['nomeUserFunc'] = $username;
				$_SESSION['successo@#logar'] = "You are now logged in";
				header('location: funcionario.php');
			}else {
				array_push($errors, "Email/Senha está errado");
			}
		}
	}

?>

