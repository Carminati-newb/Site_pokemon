<?php
    include "ddd.php";

    $id = $_GET['Id'] ?? '';
    $sql = "SELECT * FROM `cadastro` WHERE Id_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Excluir</title>

	<meta http-equiv="Content-type" content= "text/html"; charset = "UTF-8"/>
    <link rel = "stylesheet" type = "text/css" href = "estilo_cadastro.css"/>

</head>
<form  method="POST" action="exclusao.php">

<body>
	
	
	
	<?php

	//concexao com o banco de dados
	

	//salvandos os dados em variaveis
	
	$firstname = $linha['firstname'];
	$lastname = $linha['lastname'];
	$email = $linha['email'];
	$estado = $linha['estado'];
	$sexo = $linha['sexo'];
	$gen = $linha['gen'];
	 
	
			echo "<br> <hr> <br> Dados que irão ser excluidos <br> Nome : ". $firstname."<br> Sobrenome : ". $lastname."<br> email: ".$email."<br> Estado :".$estado."<br> sexo : ".$sexo."<br> geração: ".$gen;

			echo "<br>".$id;

		?>
</br>

			
			
			<ul><input type="submit" name="Submit" value="Confirmar"></ul>
			<input type="hidden" name="id" value="<?php echo $linha['Id_pessoa']; ?>">
			<input type="hidden" name="firstname" value="<?php echo $linha['firstname']; ?>">
	
		
	</body>
</form>

	<ul><a href="lista.php"><button>Cancelar</button></a></ul>
</html>
