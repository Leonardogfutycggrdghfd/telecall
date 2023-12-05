<?php
  $dbHost = 'localhost';
  $dbUsername = 'root';
  $dbPasswor = 'leonardo';
  $dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUsername, $dbPasswor, $dbName);
   
?><!--- if ($conexao->connect_error){
     echo'erro';
  }else{
    echo 'conexão';
  }--->