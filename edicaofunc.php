<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>KM</title>
</head>
<style>
body{
    background-color: rgba(180, 235, 209, 0.623);
    margin: 0 auto;
    padding: 40px 40px;


}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}
</style>

<body>

<img class="wave" src="img/wave.png">
<?php

include("conexao.php");
$nome      = $_POST["Nome"];
$nascimento = $_POST["Nascimento"];
$rg = $_POST["RG"];
$cpf = $_POST["CPF"];
$endereco = $_POST["Pai"];
$estado = $_POST["Mãe"];
$email = $_POST["Email"];
$telefone = $_POST["Telefone"];
$id        = $_POST["id"];

$sql = "UPDATE funcionario SET Nome = '$nome', Nascimento = '$nascimento',
RG = '$rg', CPF = '$cpf', Pai = '$endereco', Mãe = '$estado', Email = '$email',
Telefone = '$telefone' WHERE funcionario.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarfunc.php");
?>



</body>