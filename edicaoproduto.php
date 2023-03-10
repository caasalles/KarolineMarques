<?php

include("conexao.php");
$produto = $_POST["Produto"];
$preco = $_POST["Preco"];
$disponibilidade = $_POST["Disponibilidade"];
$codigo = $_POST["Codigo"];
$id        = $_POST["id"];

$sql = "UPDATE produtos SET Produto = '$produto', Preco = '$preco',
Disponibilidade= '$disponibilidade', Codigo = '$codigo'  WHERE produtos.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarproduto.php");
?>