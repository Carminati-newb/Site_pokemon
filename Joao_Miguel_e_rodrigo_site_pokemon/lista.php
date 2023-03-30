<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="Content-type" content= "text/html"; charset = "UTF-8"/>
    <link rel = "stylesheet" type = "text/css" href = "estilo_cadastro.css"/>
	
	<title>Lista</title>

</head>

<body>
	<?php
 
	//conferindo se a variavel foi iniciada
	if (isset($_POST['pesquisar'])) {
		$busca = $_POST['pesquisar'];
	
	}else{
		$busca = "";
	}
	
	//chamando a conexão com o banco
	include "ddd.php";

	//script para buscar os dados no banco
	$sql = "SELECT * FROM `cadastro` WHERE firstname LIKE '%$busca%' or lastname LIKE '%$busca%'";

	

	$recebe = mysqli_query($conn, $sql);

	?>

<!-- Formulario para buscar os dados no banco baseado no nome da pessoa -->
<form class="d-flex" action="lista.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Pesquisar" name="pesquisar" autofocus>
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
</form>
	<!-- Tabela onde os dados serão mostrados--->
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Estado</th>
      <th scope="col">Sexo</th>
      <th scope="col">Geração</th>
    </tr>
  </thead>
  <tbody>

  	<?php
	
		//script para consulta na tabela
		while ($linha = mysqli_fetch_assoc($recebe) ){

		$firstname = $linha['firstname'];
		$lastname = $linha['lastname'];
		$email = $linha['email'];
		$estado = $linha['estado'];
		$sexo = $linha['sexo'];
		$gen = $linha['gen'];
		$id = $linha['Id_pessoa'];

		echo "<tr>
				<th scope='row'>$firstname</th>
				<td>$lastname</td>
				<td>$email</td>
				<td>$estado</td>
				<td>$sexo</td>
				<td>$gen</td>
				<td>

				<a href = 'alteracao_pokemon.php?Id=$id'><button>Editar</button></a>
				<a href = 'excluir.php?Id=$id'><button>Excluir</button></a>
				
				</td>
				</tr>";
	}

	?>

    
    
    
  </tbody>
</table>

<a href="pokemon.html"><button>Página Inicial</button></a>



</body>
</html>
