<?php

$local_serve = "localhost";      // local do servidor
$usuario_serve = "root";         // nome do usuario
$senha_serve = "";                  // senha
$banco = "locadora";      // nome do banco de dados

$conn = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não foi possivel conectar-se ao banco de dados!");


$usuario1 = $_POST['usuario'];
$senha = md5($_POST['senha']);



//faz busca no banco para verificar se o usuario ja existe
$sqlbusca = "SELECT * FROM funcionario WHERE usuario = '$usuario1'";

//executa o comando sql
$resultado = mysqli_query($conn, $sqlbusca) ;
//testa se o campo do formulario foi deixado em branco ou vazio
if ($usuario1 == "" || $usuario1 = null){
    echo "O campo não pode ser vazio!";
}
//testa se ja tem no banco um usuario com o nome informado
else if (mysqli_num_rows($resultado)>0){
    echo "Usuario ja existente";
//se o campo nao ficou em branco e o usuario ainda nao existe no banco insere esse usuario    
}
else if (mysqli_num_rows($resultado)<=0){
    $usuario1 = $_POST['usuario'];
    $sqlinsert = "INSERT INTO funcionario(usuario,senha)VALUES('$usuario1','$senha')";
    mysqli_query($conn, $sqlinsert) or die("Não foi possível inserir os dados"); 
    echo"Usuario inserido com sucesso!!!";
        
}
echo " <a href='cadastrofuncionario.php'>Voltar</a> ";


?>
