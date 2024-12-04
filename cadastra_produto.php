<?php
    require("conecta.php");

    $descricao = $_POST['descricao'];
    $cor =  $_POST['cor'];
    $peso = $_POST['peso'];
    
    $sql = "INSERT INTO produto (descricao, cor, peso)
    VALUES ('$descricao', '$cor', '$peso')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>