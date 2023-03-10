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
    include_once("conexao.php");
   
    $produto = $_POST["Produto"];
    $preco = $_POST["Preco"];
    $disponibilidade = $_POST["Disponibilidade"];
    $codigo = $_POST["Codigo"];

    
    $result_produtos= "INSERT INTO produtos(Produto, Preco, Disponibilidade, Codigo)
                    VALUES ('$produto','$preco', '$disponibilidade', '$codigo')";
    $resultado_produtos= mysqli_query($conn, $result_produtos);
   
    if(mysqli_affected_rows($conn) != 0){
        echo "Produto cadastrado com sucesso";
    }

      
      

        else{
                echo "Erro ao cadastrar";
                   
                 
            }
          
?>

<br>
<br>
<a href="formproduto.html" class="btn">VOLTAR</a>

</body>