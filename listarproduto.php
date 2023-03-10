<?php
include("conexao.php");

$sql = "select * from produtos";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Produtos | KM </title>
<style>

@font-face {
    font-family: Secular;
    src: url(fonte/Secular);
  }
  @font-face {
    font-family: Questrial;
    src: url(fonte/Questrial);
  }

  @font-face {
    font-family: Mulish;
    src: url(fonte/mulish);
  }

  @font-face {
    font-family: Growland;
    src: url(fonte/Growland);
  }
body {
  background-color: rgba(180, 235, 209, 0.623);
background-size: cover;
width:100%;
align-items: baseline;
justify-content: center;
padding: 10px;
min-height: 100vh;
margin:0;
}
#tabela{

}
table, th,td {
  border-collapse: collapse;
  padding: 10px 10px;
  table-layout: auto;
  font-family: 'Questrial', sans-serif;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);


}

table {
  width: 80%;

}

th{
  background-color: #A4BE7B;
    color: #fff;
    opacity: 80%;
    font-family: 'Questrial', sans-serif;
    font-weight: 400;
    
 
}

td{
  background-color:#fff  ;
    color: #;
    opacity: 70%;
    font-family:secular;
    font-family:Mulish;
    
}


caption {
  caption-side: bottom ;
  
}

h1 {
  font-weight: 300;
  font-family: 'Questrial', sans-serif;
  color: #000000;

}

#botao{
  background-color:#5F8D4E;
}
.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
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
</style>
</head>

<body>
<br>
  <br>
  <br>
<a href="painel.html" class="btn">VOLTAR</a>
<img class="wave" src="img/wave.png">
<?php
if(mysqli_fetch_array($query) < 1) {
  $mysqli->close();
}
?>

<h1><center> PRODUTOS </center></h1>
<table width="500" border="1" align="center">
<thead> 
<tr>
    <th>ID</th>
    <th>PRODUTO</th>
    <th>PREÇO</th>
    <th>DISPONIBILIDADE</th>
    <th>CODIGO</th>


    <th>EDITAR/EXCLUIR</th>
  </tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id        = $L["id"];
  $produto      = $L["Produto"];
  $preco     = $L["Preco"];
  $disponibilidade     = $L["Disponibilidade"];
  $codigo     = $L["Codigo"];

    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$produto</td>
    <td>$preco</td>
    <td>$disponibilidade</td>
    <td>$codigo</td>

 <td><button><a href=\"editarproduto.php?id=$id\">EDITAR</a></button> |
 <button> <a href=\"excluirproduto.php?id=$id\">EXCLUIR</a></button></td>

  </tr>
  </tbody>\n";
}  
?> 
</table>
</body>
</html>