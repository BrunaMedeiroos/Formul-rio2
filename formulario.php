<?php
if(isset($_POST['submit']))
{
    /*TESTE PARA SABER SE ESTÁ SUBMITADO - ESTÁ DANDO ERRO NO INDEX
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('Genero: ' . $_POST['genero']);
    print_r('<br>');
    print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    print_r('<br>');
    print_r('Cidade: ' . $_POST['cidade']);
    print_r('<br>');
    print_r('Estado: ' . $_POST['estado']);
    print_r('<br>');
    print_r('Endereço: ' . $_POST['endereço']);*/
    
    //incluindo a conexão atravez do INCLUDE

    include_once('config.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nac = $_POST['data_nascimento'];
    $cidade = $_POST['Cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    //FAZENDO A QUERY DE INSSET - VARIAVEL DE CONEXÃO

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nac,Cidade,estado,endereco)
    VALUES('$nome', '$email', '$telefone', '$sexo', '$data_nac', '$cidade', '$estado', '$endereco')");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend> <b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>

                <p>Sexo</p>

                <input type="radio" id="femenino" name="genero" value="femenino" required>
                <label for="femenino">Femenino</label>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>

                <div class="inputBox">
                    <label for="data_nascimento"> Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>

                </div>
                <br>

                <div class="inputBox">
                    <input type="text" name="Cidade" id="Cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>

                </div>
                <br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>

                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>


    </div>




</body>

</html>