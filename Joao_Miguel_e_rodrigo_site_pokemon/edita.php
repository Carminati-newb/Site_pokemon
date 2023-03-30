<!DOCTYPE html>
<html>
<head>
	<title>Altaração</title>

	<meta http-equiv="Content-type" content= "text/html"; charset = "UTF-8"/>
    <link rel = "stylesheet" type = "text/css" href = "estilo.css"/>

</head>
<form method="post">

<body>
	
	
	
	<?php

	//concexao com o banco de dados
	include "ddd.php";

	//salvandos os dados em variaveis
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$estado = $_POST['estado'];
	$sexo = $_POST['sexo'];
	$gen = $_POST['gen'];
	$id = $_POST['id'];
	
			//script para inserção dos dados no banco
			$sql = "UPDATE  `cadastro` SET `firstname`= '$firstname',`lastname`= '$lastname',`email`= '$email',`estado` = '$estado',`sexo`= '$sexo',`gen`= '$gen' WHERE Id_pessoa = $id";

			//confirmação da inserção
			if (mysqli_query($conn, $sql)){

				echo "<br> <hr> <br> Dados altualizados com sucesso <br> Nome : ". $firstname."<br> Sobrenome : ". $lastname."<br> email: ".$email."<br> Estado :".$estado."<br> sexo : ".$sexo."<br> geração: ".$gen ;

			}else {
				echo "DEU ERRADO";
			}

		?>

		<ul>
			
			<li><a href="lista.php">Lista</a></li>
			<li><a href="pokemon.html" >Página Inicial</a></li>

		</ul>
		
	</body>
</form>
</html>
