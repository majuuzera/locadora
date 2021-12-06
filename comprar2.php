<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/compra.css">
</head>
<body>
   
</body>
</html>

 
<?php
          $conn=mysqli_connect("localhost", "root", "","locadora");
                   
          $sql = "SELECT * FROM produtos WHERE id = 2";
          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          while($ln = mysqli_fetch_assoc($qr)){
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"></a>';
 }
         
 echo " <a href='carrinho.php'>Clique aqui para confirmar compra</a> ";
?>

         

          

    
    