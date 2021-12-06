<?php

$servidor = "localhost";

$usuario = "root";

$senha = "";

$banco = "locadora";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];

$sqlInsert = "INSERT INTO funcionario( nome, cpf, cep) Values ('$nome' , '$cpf', '$cep')";

mysqli_query($conexao, $sqlInsert) or die("Não foi possível inserir os dados");

header('location: cadastrofuncionario.html');