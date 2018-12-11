<?php
if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	$fileName = $_FILES ['file']['name'];
	$fileTmpName = $_FILES ['file']['tmp_name'];
	$fileSize = $_FILES ['file']['size'];
	$fileError = $_FILES ['file']['error'];
	$fileType = $_FILES ['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array ('jpg','jpeg','png','pdf','zip');
	if (in_array($fileActualExt, $allowed)){
		if ($fileError===0){
			if ($fileSize < 10000000000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				//header("Location: aluno.php?uploadsuccess");teste
				?>
		<script> window.alert ("Arquivo enviados com sucesso");</script>

		<?php
		

			}else {
				//echo "Arquivo foi muito grande!";
				?>
		<script> window.alert ("Arquivo foi muito grande");</script>

		<?php
			}

		}else {
			//echo "Teve erro no upload!";
			?>
		<script> window.alert ("Arquivo enviados com sucesso");</script>

		<?php
		}

	}else {
		?>
		<script> window.alert ("O tipo to arquivo foi inválido");</script>

		<?php

	}
}