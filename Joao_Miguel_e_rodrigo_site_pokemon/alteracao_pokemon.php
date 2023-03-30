
<!DOCTYPE html>

<html lang="pt-br">

<head>



    <title> Alteração</title>

    <meta http-equiv="Content-type" content= "text/html"; charset = "UTF-8"/>
    <link rel = "stylesheet" type = "text/css" href = "estilo_cadastro.css"/>


</head>

<body>
    
    <?php
    include "ddd.php";

    $id = $_GET['Id'] ?? '';
    $sql = "SELECT * FROM `cadastro` WHERE Id_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);

?>

    <h1>Alteração</h1>
    <form method="post" action="edita.php">
        
        <Fieldset> <legend>Dados Pessoais</legend>
        Nome:<input type="text" name="firstname" required value="<?php echo $linha['firstname']; ?>"><br />
        Sobrenome:<input type="text" name="lastname" required value="<?php echo $linha['lastname']; ?>"><br />
        Email:<input type="email" name="email" required value="<?php echo $linha['email']; ?>"><br />
        Estado: <select name="estado" >
            <option value="empty">Selecione</option>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rio Grando do Sul">Rio Grando do Sul</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
            <option value="Distrito Federal">Distrito Federal</option>
            


        </select><br>
        Sexo:<input type="radio" name="sexo" value="Masculino">Masculino
        <input type="radio" name="sexo" value="Feminino">Feminino
        <input type="radio" name="sexo" value="Outro">Outro<br>
        
    
        </Fieldset>
        
        <fieldset class="segunda">
            <legend>Pokédex</legend>
            Geração favorita:
            <input type="radio" name="gen" value="Primeira">1º
            <input type="radio" name="gen" value="Segunda">2º
            <input type="radio" name="gen" value="Terceira">3º
            <input type="radio" name="gen" value="Quarta">4º
            <input type="radio" name="gen" value="Quinta">5º
            <input type="radio" name="gen" value="Sexta">6º
            <input type="radio" name="gen" value="Setima">7º
            <input type="radio" name="gen" value="Oitava">8º<br><br>
                               
        
        </fieldset>
        
        <ul>
        <br>
        <input type="submit" name="Submit" value="Alterar">
        <input type="hidden" name="id" value="<?php echo $linha['Id_pessoa']; ?>">
        <input type="reset" name="Submit2" value="Reset"><br><br>
        </ul>
    </form>
    
    <ul>
    <a href="pokemon.html"><button>Página Inicial</button></a>
    </ul>

</body>

</html>