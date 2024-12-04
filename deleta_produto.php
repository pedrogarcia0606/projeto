<?php
require "conecta.php";
$id=$_POST["ID"];
$SQL="DELETE FROM PRODUTO WHERE IDPRODUTO=$id";
$conn->query($SQL);
header("location: index.html");