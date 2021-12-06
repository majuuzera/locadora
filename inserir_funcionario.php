<?php

$servidor = "localhost";

$usuario = "root";

$senha = "";

$banco = "locadora";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

$sqlInsert = "INSERT INTO funcionario( nome, cpf, cargo, telefone, email, rua, bairro, numero, cidade, estado, cep) Values ('$nome' , '$cpf', '$cargo', '$telefone', '$email', '$rua', '$bairro', '$numero', '$cidade', '$estado', '$cep')";

mysqli_query($conexao, $sqlInsert) or die("Não foi possível inserir os dados");

header('location: insertVendedor.php');

