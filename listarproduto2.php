<?php
include("conexao.php");

$sql = "select * from produto";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Produtos</title>
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
background: linear-gradient(#E5D9B6,#A4BE7B,#5F8D4E,#285430);
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
  font-family: secular;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);


}

table {
  width: 80%;

}

th{
  background-color: #A4BE7B;
    color: #fff;
    opacity: 80%;
    font-family: secular;
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
  font-weight: 500;
  font-family: Mulish;
  color:#5F8D4E;

}

#botao{
  background-color:#5F8D4E;
}
</style>
</head>

<body>
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
    <th>QUINZENAL</th>
    <th>MENSAL</th>
    <th>ANUAL</th>


    <th>EDITAR/EXCLUIR</th>
  </tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id        = $L["id"];
  $quinzenal      = $L["quinzenal"];
  $mensal    = $L["mensal"];
  $anual     = $L["anual"];

  
    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$quinzenal</td>
    <td>$mensal</td>
    <td>$anual</td>

    <td><a href=\".php?id=$id\">Editar</a> |
  <a href=\".php?id=$id\">Excluir</a></td>
  </tr>
  </tbody>\n";
}  
?> 
</table>
</body>
</html>