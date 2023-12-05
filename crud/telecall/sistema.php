<?php
    session_start();
    include_once("coco.php");

    if((!isset($_SESSION["email"])== true) and (isset($_SESSION["senha"]) == true)){
      unset($_SESSION["email"]);
      unset($_SESSION["senha"]);

      header("location:login.php");
    }
    $logado= $_SESSION["email"];
    if(!empty($_GET['search']))
    {
      $data=$_GET['search'];

      $sql="SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
      
    }
    else{
        $sql= "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
    

    

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php.js/sistema.js">
    <script src="php.js/sistema.js"></script>
    <script href="php.js/sistema.js"></script>
</head>
<style>
  body{
    text-align: center;
  }
</style>
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
<div class="d-flex">
  <a href="sair.php" class="btn btn-danger me-5">sair</a>
</div>

<div class="box-search">
  <input type="search" class="from-control w-25" placeholder="pesquisar" id="pesquisar">
  <button onclick="searchData()" class="btn btn-primary">
  <i class="bi bi-search"></i>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
  </button>
</div>
<div class="m-5">
  <table class="table tex-white table-bg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome</th>
      <th scope="col">email</th>
      <th scope="col">cpf</th>
      <th scope="col">telefone</th>
      <th scope="col">sexo</th>
      <th scope="col">data de nacimento</th>
      <th scope="col">cidate</th>
      <th scope="col">estado</th>
      <th scope="col">endereco</th>
      <th scope="col">senha</th>
      <th scope="col">...</th>
    </tr>
</div>
</thead>
  <tbody>
<?php
       while($user_data =mysqli_fetch_assoc($result)){
       echo"<tr>";
       echo"<td>".$user_data["id"]."</td>";
       echo"<td>".$user_data["nome"]."</td>";
       echo"<td>".$user_data["email"]."</td>";
       echo "<td>".$user_data["cpf"]."</td>";
       echo "<td>".$user_data["telefone"]."</td>";
       echo "<td>".$user_data["sexo"]."</td>";
       echo "<td>".$user_data["data_nasc"]."</td>";
       echo "<td>".$user_data["cidade"]."</td>";
       echo "<td>".$user_data["estado"]."</td>";
       echo "<td>".$user_data["endereco"]."</td>";
       echo "<td>".$user_data["senha"]."</td>";
       echo "<td>
       <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
       <i class=bi bi-pencil></i>
       <svg xmlns='http://www.w3.org/2000/svg' width='15' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
       <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
       </svg>
       <a/>
      <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
      <i class=bi bi-trash3></i>
      <svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
      <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
      </svg>
      </a>
       </td>";
       echo"<tr>";
       }
?>
  </tbody>
  <script>
    var search=document.getElementById('pesquisar');

search.addEventListener('keydown',function(event){
if(event.key === "Enter"){
  searchData();
}
});

function searchData()
{
window.location='sistema.php?search='+search.value;
}
  </script>
  
</table>
</body>
</html>