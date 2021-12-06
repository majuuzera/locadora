<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Locadora veiculos</title>
</head>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">welcome back!</h2>
                <p class="description description-primary">To see your profile</p>
                <p class="description description-primary">please login with your personal info</p>
                <button id="signin" class="btn btn-primary">sign in</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">welcome you!</h2>
                <p class="description description-second">Use your CEP for registration:</p>
                <form action="cadastrarfunc.php" class="form" method="POST">
                    <label class="label-input" for="">
                    <i class="far fa-user icon-modify"></i>
                    <input type="text" name="usuario" placeholder="Usuário">
                </label>

                    <label class="label-input" for="">
                  <i class="far fa-address-card icon-modify"></i>
                    <input type="cep" name="cep" id="cep" placeholder="Cep">
                </label>
                    <label class="label-input" for="">
                  <i class="fas fa-lock icon-modify"></i>
                  <input type="password" name="senha" placeholder="Password">
              </label>



                    <button class="btn btn-second" name="botao1">sign up</button>
                </form>
             
            </div>
            <!-- second column -->
        </div>
        <!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">hello, friend!</h2>

                <button id="signup" class="btn btn-primary">sign up</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">sign in to developer</h2>

                <p class="description description-second">or use your email account:</p>
                <form action="loginf.php" class="form" method="POST">
                    <label class="label-input" for="">
              <i class="far fa-user icon-modify"></i>
              <input type="text" name="usuario" placeholder="Usuário">
          </label>

                    <label class="label-input" for="">
                  <i class="fas fa-lock icon-modify"></i>
                  <input type="password" name="senha" placeholder="Password">
              </label>

                    <a class="password" href="#">forgot your password?</a>
                    <button class="btn btn-second" name="botao1">sign in</button>
                </form>
            </div>
            <!-- second column -->
        </div>
        <!-- second-content -->
    </div>
    <script src="js/app.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cep').mask('00000-000', {
                reverse: true
            });
        });
    </script>
</body>
<html>
<!-- <script src="public/js/bootstrap.min.js"></script>

<div class="container">
    <h1 class="page-header">
        LOCADORA FREITAS - CADASTRO FUNCIONARIO
    </h1>
</div>

<form action="inserir_funcionario.php" method="POST" class="form-horizontal">

    
      <div class="form-group ">
        <label for="inputNome" class="col-sm-2 control-label col-form-label"> CARGO</label>
      <div class="col-sm-8">
        <input type="text" name="cargo" class="form-control" id="inputcargo" placeholder="Cargo ou função">
      </div>
      </div>
    
    <div class="form-group ">
      <label for="inp-8">
      <input type="texutNome" class="col-sm-2 control-label col-form-label"> NOME</label>
    <div class="col-smt" name="nome" class="form-control" id="inputNome" placeholder="Nome completo">
    </div>
    </div>

    <div class="form-group ">
      <label for="inputUser" class="col-sm-2 control-label col-form-label"> USUARIO</label>
    <div class="col-sm-8">
      <input type="text" name="usuario" class="form-control" id="inputUser" placeholder="Usuario para login">
    </div>
    </div>

    <div class="form-group ">
      <label for="inputSenha" class="col-sm-2 control-label col-form-label"> SENHA</label>
    <div class="col-sm-8">
      <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Senha">
    </div>
    </div>

    <div class="form-group ">
      <label for="inputCpf" class="col-sm-2 control-label col-form-label"> CPF</label>
      <div class="col-sm-8">
        <input type="text" name="cpf" class="form-control" id="inputCpf" placeholder="XXX.XXX.XXX-XX">
      </div>
    </div> 

    
    <div class="form-group ">
      <label for="inputEmail" class="col-sm-2 control-label col-form-label"> EMAIL</label>
      <div class="col-sm-8">
        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="email@email.com.br">
      </div>
    </div> 

    <div class="form-group ">
      <label for="inputTelefone" class="col-sm-2 control-label col-form-label"> TELEFONE</label>
      <div class="col-sm-8">
        <input type="text" name="telefone" class="form-control" id="inputTelefone" placeholder="(XX)XXXXX-XXXX">
      </div>
    </div> 

    <div class="form-group ">
      <label for="inputRua" class="col-sm-2 control-label col-form-label"> RUA</label>
      <div class="col-sm-8">
        <input type="text" name="rua" class="form-control" id="inputRua" placeholder="Rua">
      </div>
    </div> 

    <div class="form-group ">
      <label for="inputNumero" class="col-sm-2 control-label col-form-label"> NUMERO</label>
      <div class="col-sm-8">
        <input type="text" name="numero" class="form-control" id="inputNumero" placeholder="Numero">
      </div>
    </div> 

    <div class="form-group ">
      <label for="inputBairro" class="col-sm-2 control-label col-form-label"> BAIRRO</label>
      <div class="col-sm-8">
        <input type="text" name="bairro" class="form-control" id="inputBairro" placeholder="Bairro">
      </div>
    </div> 

    <div class="form-group ">
      <label for="inputCidade" class="col-sm-2 control-label col-form-label"> CIDADE</label>
      <div class="col-sm-8">
        <input type="text" name="cidade" class="form-control" id="inputCidade" placeholder="Cidade">
      </div>
    </div> 
    
    <div class="form-group ">
      <label for="selectEstado" class="col-sm-2 control-label col-form-label"> ESTADO</label>
      <div class="col-sm-8">
      <select name="estado" class="form-control" id="estado">
        <option value="Acre (AC)">Acre (AC)</option> <option value="Alagoas (AL)">Alagoas (AL)</option> <option value="Amapá (AP)"> Amapá (AP)</option><option value="Amazonas (AM)">Amazonas (AM)</option>
       <option value="Bahia (BA)"></option> <option value="Ceará (CE)">Ceará (CE)</option><option value="Distrito Federal (DF)">Distrito Federal (DF)</option><option value="Espírito Santo (ES)">Espírito Santo (ES)</option><option value="Goiás (GO)">Goiás (GO)</option>
       <option value="Maranhão (MA)">Maranhão (MA)</option><option value="Mato Grosso (MT)">Mato Grosso (MT)</option><option value="Mato Grosso do Sul (MS)">Mato Grosso do Sul (MS)</option><option value="Minas Gerais (MG)">Minas Gerais (MG)</option><option value="Pará (PA)">Pará (PA)</option>
       <option value="Paraíba (PB)">Paraíba (PB)</option> <option value="Paraná (PR)">Paraná (PR)</option><option value="Pernambuco (PE)">Pernambuco (PE)</option><option value="Piauí (PI)">Piauí (PI)</option><option value="Rio de Janeiro (RJ)" >Rio de Janeiro (RJ)</option><option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
       <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option><option value="Rondônia (RO)">Rondônia (RO)</option><option value="Roraima (RR)">Roraima (RR)</option><option value="Santa Catarina (SC)">Santa Catarina (SC)</option><option value="São Paulo (SP)">São Paulo (SP)</option><option value="Sergipe (SE)">Sergipe (SE)</option>
       <option value="">Tocantins (TO)</option>     
      </select>
     </div>
    </div> 

    <div class="form-group ">
      <label for="inputCep" class="col-sm-2 control-label col-form-label"> CEP</label>
      <div class="col-sm-8">
        <input type="text" name="cep" class="form-control" id="inputCep" placeholder="Cep">
      </div>
    </div> 

    <button class="btn btn-primary btn-lg">Cadastrar</button>
  </form>

</body>
</html> -->