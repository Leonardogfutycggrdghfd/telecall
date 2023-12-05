<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
<link  href="php.css/login.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
 <style>
 

 </style>
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

      <h1>Login</h1>
    
      <form  class='row g-3' action="login_texter.php" class="login" method="post">
        <div class="col-md-6">
        <input type="text" name="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="col-md-6">
        <input type="password" class="form-control" name="senha" placeholder="senha">
        </div>
        <div class="col-12">
          <input  type="submit" class="btn btn-primary"  name="submit" value="enviar">
        </div>
        
        <br><br>
        <a class="link-offset-2 link-underline link-underline-opacity-0" href="index.php">volta</a>
        <br><br>
        <a  class="link-offset-2 link-underline link-underline-opacity-0" href="cadastro.php" class="forget">cadastra</a>
        <br><br>
        <a class="link-offset-2 link-underline link-underline-opacity-0" href="index.php">volta para a telda incial</a>
      </form>
      
    </div>
      

</body>
</html>