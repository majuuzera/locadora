<?php
          $conn=mysqli_connect("localhost", "root", "","locadora");
                   
          $sql = "SELECT * FROM produtos WHERE id = 6";
          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          while($ln = mysqli_fetch_assoc($qr)){
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Clique aqui para confirmar a compra</a>';
          }
    ?>
          

    
    