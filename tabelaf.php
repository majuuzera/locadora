<?php
 include("conexao.php");

    $consulta = "SELECT * FROM funcionario";
    
    $con=mysqli_connect("example.com","peter","abc123","my_db");
    // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result = mysqli_query($con,"SELECT * FROM funcionario");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuário</th>
      <th scope="col">CPF</th>
      <th scope="col">CEP</th>
    </tr>
  </thead>
  <tbody>
      <?php while($row = mysqli_fetch_array($result)){?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row["usuario"]; ?></td>
      <td><?php echo $row["cpf"]; ?></td>
      <td><?php echo $row["cep"]; ?></td>
    </tr>
     <?php mysqli_close($con);} ?>
    
  </tbody>
</table>
</body>
</html>