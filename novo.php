<!-- <?php include "verifica_autenticacao.php" //inclui o arquivo de verificação ?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/app.js">
    <link rel="stylesheet" href="public\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />


    <title>Locadora</title>
</head>
<body>
    <nav id="menu" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Serchiari Ltda</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Cadastre-se Aqui</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrofuncionario.html">Login Funcionário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastroveiculo.html">Veículos Cadastrados</a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="tittle">
            <h1 class="display-1 text-right ">CAR SHOP</h1></div>
        <h6 class="h6 text-right">--fall in love--</h6>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Serchiari Ltda</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Cadastre-se aqui</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastrofuncionario.html">Cadastro Funcionario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastroveiculo.html">Cadastro Veiculo</a>
              </li>
            </ul>
              
          </div>
        </div>
      </nav> -->

     <!-- <div class="card">
    <div class="d-flex bd-highlight">
    <div class="d-flex flex-row bd-highlight mb-3">
      <div class="col-md-6 position-static p-4 pl-md-0">
        <div class="row no-gutters bg-light position-relative">
            <div class="t1">
            <h5 class="mt-0">Dodge Charger</h5>
            </div>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <?php
          $conn=mysqli_connect("localhost", "root", "","locadora");
                   
          $sql = "SELECT * FROM produtos";
          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          while($ln = mysqli_fetch_assoc($qr)){
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
          }
    ?>
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="https://epipoca.com.br/wp-content/uploads/2021/06/1385879033011-fast12.jpg" class="w-100" alt="...">
          </div>
    </div>
</div>
</div>
</div>
 -->
   <!--  
    <div class="mr-auto p-2 bd-highlight">
    <div class="d-flex flex-row-reverse bd-highlight">
    <div class="col-md-6 position-static p-4 pl-md-0">
        <div class="row no-gutters bg-light position-relative">
            <div class="t1">
            <h5 class="mt-0">GT</h5>
            </div>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <?php
          $conn=mysqli_connect("localhost", "root", "","locadora");
                   
          $sql = "SELECT * FROM produtos";
          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          while($ln = mysqli_fetch_assoc($qr)){
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
          }
    ?>
            <div class="col-md-6 mb-md-0 p-md-4">
              <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y2Fyc3xlbnwwfHwwfHw%3D&w=1000&q=80" class="w-100" alt="...">
            </div>
            <div class="col-md-6 position-static p-4 pl-md-0">
                <div class="d-flex flex-row-reverse bd-highlight">
                <div class="row no-gutters bg-light position-relative">
                    <div class="t1">
                    <h5 class="mt-0">MORE ABOUT GT</h5>
                    </div>
            <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                    <div class="col-md-6 mb-md-0 p-md-4">
                      <img src="https://www.hojeemdia.com.br/polopoly_fs/1.398586!/image/image.JPG_gen/derivatives/landscape_653/image.JPG" class="w-100" alt="...">
                    </div>
              </div>
            </div>
           </div>
      </div>
    </div>
    </div>
    </div>
    -->
        
    <!--     <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="d-flex flex-row-reverse bd-highlight">
            <div class="row no-gutters bg-light position-relative">
                <div class="t1">
                <h5 class="mt-0">AC 260 Roadster</h5>
                </div>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <?php
          $conn=mysqli_connect("localhost", "root", "","locadora");
                   
          $sql = "SELECT * FROM produtos";
          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          while($ln = mysqli_fetch_assoc($qr)){
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
          }
    ?>
                <div class="col-md-6 mb-md-0 p-md-4">
                  <img src="http://ffw.uol.com.br/app/uploads/noticias/2018/01/tommy-shelby.jpg" class="w-100" alt="...">
                </div>
          </div>
        </div>
       </div>
       </div>

    <script src="js/jquery-3.6.0.js"></script>
    <script  src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html> --> -->