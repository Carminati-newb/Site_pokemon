<?php 
	
	$banco = "localhost";
	$user = "root";
	$senha = "";
	$database = "pokemon";

	if ( $conn = mysqli_connect($banco, $user, $senha, $database)){
		//echo "Conexão estabelecida <br> <br> <hr>";
	} else
		echo "A conexão falhou <br>";


		
?>