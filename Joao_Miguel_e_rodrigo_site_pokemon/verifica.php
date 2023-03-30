<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>

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
	 
	
			//script para inserção dos dados no banco
			$sql = " INSERT INTO `cadastro`(`firstname`, `lastname`, `email`, `estado`, `sexo`, `gen`) VALUES ('$firstname', '$lastname', '$email', '$estado', '$sexo', '$gen')";

			//confirmação da inserção
			if (mysqli_query($conn, $sql)){

				echo "<br> <hr> <br> Dados inseridos com sucesso <br> Nome : ". $firstname."<br> Sobrenome : ". $lastname."<br> email: ".$email."<br> Estado :".$estado."<br> sexo : ".$sexo."<br> geração: ".$gen ;

			}

		?>

		<ul>
			
			<li><a href="pokemon_cadastro.html">Cadastro</a></li>
			<li><a href="pokemon.html" >Página Inicial</a></li>

		</ul>
		
	</body>
</form>
</html>
