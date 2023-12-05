<?php
   if(isset($_POST["submit"])){
    
    //print_r('Nome:'.$_POST['nome']);
    //print_r("<br>");
    //print_r('Email:'.$_POST['email']);
    //print_r("<br>");
    //print_r('telefone:'.$_POST['telefone']);
    //print_r("<br>");
    //print_r('sexo:'.$_POST['genero']);
    //print_r("<br>");
    //print_r('data de nasimento:'.$_POST['data_nasc']);
    //print_r("<br>");
    //print_r('cidade:'.$_POST['cidade']);
    //print_r("<br>");
    //print_r('estado:'.$_POST['estado']);
    //print_r('<br>');
    //print_r('endereço:'.$_POST['endereco']);

    include_once("coco.php");
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["genero"];
    $data_nasc = $_POST["data_nasc"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];

    $result=mysqli_query($conexao,"INSERT INTO usuarios(nome,email,cpf,telefone,sexo,data_nasc,cidade,estado,endereco,senha) VALUES ('$nome','$email','$cpf','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco','$senha')");
   
    header("Location:login.php");
   }


     
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script href="php.js/cadastro.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="php.css/cadastro.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
  
  
  <body>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">telecall</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sistema.php">pesquisa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">codrasto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">login</a></li>
            <li><a class="dropdown-item" href="modelos.php">molelos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tela.php">tela</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
    </div>
    
  </div>
    <div class="container" >
        <div class="row">
            <div class="col">
               
            </div>
        </div>
    </div>
</nav>

<div class="box">
     <form action="cadastro.php" method="post">
      <fieldset>
        <legend><h6><b>formulario do cliente</b></h6></legend>
        <br>
        <div class="imputBox">
          <label for="nome" class="labelInput">nome completo</label>
          <input type="passord" name="nome" id="nome" class="inputUser" required> 
        </div>
        <br><br>
        <div class="imputBox">
         <label for="email"class="labelInput">E-mail</label>
        <input type="email" name="email" id="email" class="inputUser" required>
        </div>
        <br><br>
        <div class="imputBox">
         <label for="cpf"class="labelInput">cpf</label>
        <input type="text" name="cpf" id="cpf" class="inputUser" required>
        </div>
        <br><br>
        <div class="imputBox">
          <label for="telefone"class="labelInput">telefone</label>
          <input type="tel" name="telefone" id="telefone" class="inputUser" required>
        </div>
        <br><br>
        <p>sexo</p>
        <input type="radio" id="feminino" name="genero" value='feminino'required>
        <label for="feminino">Feminino</label>
        <input type="radio" id="masculino" name="genero" value='masculino'required>
        <label for="masculino">Masculino</label>
        <input type="radio" id="outro" name="genero" value='outro'required>
        <label for="outro">Outro</label>
        <br><br>
        <div class="imputBox">
          <label for="data_nasc" class="labelInput"><b>data de nassimento</b></label>
          <input type="date" name="data_nasc" id="data_nascimento"  required>
        </div>
        <br><br>
        <div class="imputBox">
          <label for="cidade"class="labelInput">Cidade</label>
          <input type="text" name="cidade" id="cidade" class="inputUser" required>
          
        </div>
        <br><br>
        <div class="imputBox">
          <label for="estado"class="labelInput">Estado</label>
          <input type="text" name="estado" id="estado" class="inputUser" required>
          
        </div>
        <br><br>
        <div class="imputBox">
          <label for="endereco"class="labelInput">Endereço</label>
          <input type="text" name="endereco" id="endereco" class="inputUser" required>
        </div>
        <br><br>
        <div class="imputBox">
          <label for="senha" class="labelInput">senha</label>
          <input type="password" name="senha" id="senha" class="inputUser" required> 
        </div>
        <input type="submit" name="submit" id="submit">
      </fieldset>
      <a href="index.php" id="submit" class="inputUser">volta</a>
     </form>
</div>

  </body>
</html>