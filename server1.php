<?php 


	session_start();

	// variable declaration
	$errors = array();
	// connect to database
	$db = mysqli_connect('localhost:3308', 'root', '', 'tabela');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$snome = mysqli_real_escape_string($db, $_POST['snome']);
		$dia = mysqli_real_escape_string($db, $_POST['dia']);
		$mes = mysqli_real_escape_string($db, $_POST['mes']);
		$ano = mysqli_real_escape_string($db, $_POST['ano']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$telefone = mysqli_real_escape_string ($db, $_POST['telefone']);
		$endereco = mysqli_real_escape_string ($db, $_POST['endereco']);
		$cidade = mysqli_real_escape_string ($db, $_POST['cidade']);
		$estado = mysqli_real_escape_string ($db, $_POST['estado']);
		$pais = mysqli_real_escape_string ($db, $_POST['pais']);
		
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Inserir o nome"); }
		if (empty($snome)) { array_push($errors, "Inserir o o sobrenome"); }
		if (empty($dia)) { array_push($errors, "Inserir o dia do nascimento"); }
		if (empty($mes)) { array_push($errors, "Inserir o mês "); }
		if (empty($ano)) { array_push($errors, "Inserir o ano"); }
		if (empty($email)) { array_push($errors, "Inserir o email"); }
		if (empty($telefone)) { array_push($errors, "Inserir o telefone"); }
		if (empty($endereco)) { array_push($errors, "Inserir o endereço"); }
		if (empty($cidade)) { array_push($errors, "Inserir nome da cidade"); }
		if (empty($estado)) { array_push($errors, "Inserir nome do estado"); }
		if (empty($pais)) { array_push($errors, "Inserir o nome do país"); }
		
		if (empty($password_1)) { array_push($errors, "Digite a senha"); }

		if ($password_1 != $password_2) {
			array_push($errors, "A senha está errada");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$sql = "INSERT INTO funcionario (username, snome, dia, mes, ano, email, telefone, endereco, cidade, estado, pais, password) 
				VALUES('$username', '$snome', '$dia', '$mes', '$ano', '$email',
				     '$telefone','$endereco', '$cidade', '$estado','$pais','$password')";
			mysqli_query($db, $sql);

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
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: funcionario.php');
			}else {
				array_push($errors, "Email/Senha está errado");
			}
		}
	}

?>

