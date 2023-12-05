<?php
    include_once("coco.php");
    if(isset($_POST["update"])){

    $id = $_POST["id"];
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
    $sqlUpdate = "UPDATE usuarios SET nome='$nome',cpf='$cpf',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco',senha='$senha' WHERE id='$id'" ;
    
    $result=$conexao->query($sqlUpdate);
    }
    header("Location:sistema.php");



?>
