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
.btn{

padding: 2px 19px;
background:#ffffff;
color:#6B8E23;
border-radius: 10px;
font-weight: 300;
font-size: 14px;
text-decoration: none;


}

.btn:hover{
background: #ffffff;
border: 1px solid #6B8E23;
transform: scale(1.1);

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
$id = $_GET["id"];
$mysqli = new mysqli("localhost","root","","nutricao");

$mysqli -> query("SELECT * FROM produtos");
echo "Total de registros encontrados: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM produtos WHERE id = $id");
echo "<br> Total de registros excluídos: " . $mysqli -> affected_rows;

$mysqli -> close();
?>
<br>
<br>
<a href="listarproduto.php" class="btn">VOLTAR</a>

</body>