<?php
  $dadosDeConexao = [
    "servidor" => "localhost",
    "usuario" => "root",
    "senha" => "",
    "nome" => "andes",
  ];
  $conexao = mysqli_connect($dadosDeConexao["servidor"], $dadosDeConexao["usuario"], $dadosDeConexao["senha"], $dadosDeConexao["nome"]);

  if( mysqli_connect_errno()) {
    die("Conexão falhou: " . mysqli_connect_errno());
  }  
?>