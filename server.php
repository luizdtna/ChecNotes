<?php 


	#session_start();

	//criando o array erros
	$errors = array(); 

	// connect to database
	$db = mysqli_connect('localhost:3308', 'root', '', 'tabela');



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
		$universidade = mysqli_real_escape_string ($db, $_POST['universidade']);
		$curso = mysqli_real_escape_string ($db, $_POST['curso']);
		$anos = mysqli_real_escape_string($db, $_POST['anos']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Inserir o nome"); }
		if (empty($snome)) { array_push($errors, "Inserir o o sobrenome"); }
		if (empty($email)) { array_push($errors, "Inserir o email"); }
		if (empty($telefone)) { array_push($errors, "Inserir o telefone"); }
		if (empty($endereco)) { array_push($errors, "Inserir o endereço"); }
		if (empty($cidade)) { array_push($errors, "Inserir nome da cidade"); }
		if (empty($estado)) { array_push($errors, "Inserir nome do estado"); }
		if (empty($pais)) { array_push($errors, "Inserir o nome do país"); }
		if (empty($universidade)) { array_push($errors, "Inserir o nome da universidade"); }
		if (empty($curso)) { array_push($errors, "Inserir o nome do curso"); }
		if (empty($anos)) { array_push($errors, "Inserir o ano"); }
		if (empty($password_1)) { array_push($errors, "Digite a senha"); }
		

		if ($password_1 != $password_2) {
			array_push($errors, "A senha está errada");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$sql = "INSERT INTO registo (username, snome, dia, mes, ano, email, telefone, endereco, cidade, estado, pais, universidade, curso, anos, password) 
				VALUES('$username', '$snome', '$dia', '$mes', '$ano', '$email',
				     '$telefone','$endereco', '$cidade', '$estado','$pais', '$universidade','$curso','$anos','$password')";
			mysqli_query($db, $sql);

			session_unset();


			

			$sql2 = "SELECT id FROM `registo` WHERE `email` = '$email'";
			
			//echo $sql2;
			$resultado2 = mysqli_query($db, $sql2) or die((mysqli_error($db)));
			$dados2 = mysqli_fetch_assoc($resultado2); 
			//echo $dados2['id']." espaço" ;
			$idAluno = $dados2['id'];
			if(mkdir(__DIR__.'/arquivos/'.$idAluno.'/', 0755, true)){
				if(mkdir(__DIR__.'/arquivos/'.$idAluno.'/provas/', 0755, true)){
					//echo('sucesso');
				}
				
			}else{
				//echo "Não criou";
			}
			/*$_SESSION['usernam'] = "$username";
			$_SESSION['success'] = "You are now logged in";*/
			//header('location: funcionario.php');
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
			$query = "SELECT * FROM registo WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			// variable declaration
	
			$sql = "SELECT * FROM registo WHERE email = '$email'";
			$resultado = mysqli_query($db, $sql);
			$dados = mysqli_fetch_array($resultado);

			$username = $dados['username']." ".$dados['snome'];
			$email    = $dados['email'];
			$id = $dados['id'];
			
			$_SESSION['success'] = "";

			if (mysqli_num_rows($results) == 1) {
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['id'] = $id;
				$_SESSION['success@#aluno'] =  "sucesso";
				header('location: aluno.php');
			}else {
				array_push($errors, "Email/Senha está errado");
			}
		}
	}
		
	
?>

