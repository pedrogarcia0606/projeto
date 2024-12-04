<?php
require "conecta.php";
$id=$_POST["ID"];
$descricao = $_POST['descricao'];
    $cor =  $_POST['cor'];
    $peso = $_POST['peso'];
$SQL="UPDATE PRODUTO  SET descricao=$descricao, cor=$cor, peso=$peso WHERE idproduto= $id";
$conn->query($SQL);
header("location: index.html");