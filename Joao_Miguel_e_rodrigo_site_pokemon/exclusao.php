<!DOCTYPE html>
<html>
<head>
	<title>Excluir</title>

	<meta http-equiv="Content-type" content= "text/html"; charset = "UTF-8"/>
    <link rel = "stylesheet" type = "text/css" href = "estilo_cadastro.css"/>

</head>
<body>
<?php
	include 'ddd.php';

	$id = $_POST['id'];
	$nome = $_POST['firstname'];
	
	$sql = "DELETE from `cadastro` WHERE Id_pessoa = $id";

	if(mysqli_query($conn, $sql)){
		echo $nome." excluido com sucesso:)";
	}else
		echo "ERRO";
?>
<ul><a href="lista.php"><button>Lista</button></a></ul>
</body>
</html>