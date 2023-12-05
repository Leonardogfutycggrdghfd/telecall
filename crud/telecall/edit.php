<?php
   if(!empty($_GET['id'])){

    include_once("coco.php");
    $id =$_GET["id"];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result =$conexao->query($sqlSelect);

    if($result->num_rows >0){
    
    while($user_data=mysqli_fetch_assoc($result)){

    $nome = $user_data["nome"];
    $cpf = $user_data["cpf"];
    $email = $user_data["email"];
    $telefone =$user_data["telefone"];
    $sexo =$user_data["sexo"];
    $data_nasc = $user_data["data_nasc"];
    $cidade = $user_data["cidade"];
    $estado = $user_data["estado"];
    $endereco = $user_data["endereco"];
    $senha = $user_data["senha"];

  }
    
  }else{
    header("Location:sistema.php");
  }

   
  }else{
    header("Location:sistema.php");
  }


     
?>
<!doctype html>
<html lang="en">
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
     <form action="saveEdit.php" method="post">
      <fieldset>
        <legend><h6><b>formulario do cliente</b></h6></legend>
        <br>
        <div class="imputBox">
          <label for="nome" class="labelInput">nome completo</label>
          <input type="passord" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required> 
        </div>
        <br><br>
        <div class="imputBox">
         <label for="email"class="labelInput">E-mail</label>
        <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email ?>"required>
        </div>
        <br><br>
        <div class="imputBox">
         <label for="cpf"class="labelInput">cpf</label>
        <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>"required>
        </div>
        <br><br>
        <div class="imputBox">
          <label for="telefone"class="labelInput">telefone</label>
          <input type="tel" name="telefone" id="telefone" class="inputUser"value="<?php echo $telefone ?>" required>
        </div>
        <br><br>
        <p>sexo</p>
        <input type="radio" id="feminino" name="genero" value='feminino' <?php echo $sexo=='feminino'?'checked':'' ?> required>
        <label for="feminino">Feminino</label>
        <input type="radio" id="masculino" name="genero" value='masculino' <?php echo $sexo=='masculino'?'checked':'' ?> required>
        <label for="masculino">Masculino</label>
        <input type="radio" id="outro" name="genero" value='outro' <?php echo $sexo=='outro'?'checked':'' ?> required>
        <label for="outro">Outro</label>
        <br><br>
        <div class="imputBox">
          <label for="data_nasc" class="labelInput"><b>data de nassimento</b></label>
          <input type="date" name="data_nasc" id="data_nascimento" value="<?php echo $data_nasc ?>"  required>
        </div>
        <br><br>
        <div class="imputBox">
          <label for="cidade"class="labelInput">Cidade</label>
          <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>"required>
          
        </div>
        <br><br>
        <div class="imputBox">
          <label for="estado"class="labelInput">Estado</label>
          <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>"required>
          
        </div>
        <br><br>
        <div class="imputBox">
          <label for="endereco"class="labelInput">Endereço</label>
          <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>"required>
        </div>
        <br><br>
        <div class="imputBox">
          <label for="senha" class="labelInput">senha</label>
          <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>"required> 
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" name="update" id="update">
      </fieldset>

       <a href="sistema.php" id="submit" class="inputUser">volta</a>
      <br>
      
     </form>
</div>

  </body>
</html>