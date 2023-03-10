<?php
include("conexao.php");

$sql = "select * from funcionario";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Clientes | KM</title>
</head>

<body>
<?php
if(mysqli_fetch_array($query) < 1) {
  $mysqli->close();
}
?>

<h1><center> Clientes </center></h1>
<table width="500" border="1" align="center">
<thead> 
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>RG</th>
    <th>CPF</th>
    <th>PAI</th>
    <th>MÃE</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>

    <th>EDITAR/EXCLUIR</th>
  </tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id        = $L["id"];
  $nome      = $L["Nome"];
  $rg     = $L["RG"];
  $cpf     = $L["CPF"];
  $pai     = $L["Pai"];
  $mae     = $L["Mae"];
  $email     = $L["Email"];
  $telefone     = $L["Telefone"];
  
    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$rg</td>
    <td>$cpf</td>
    <td>$pai</td>
    <td>$mae</td>
    <td>$email</td>
    <td>$telefone</td>
    <td><a href=\"editarcliente.php?id=$id\">[Editar]</a> |
  <a href=\"excluirfunc.php?id=$id\">[Excluir]</a></td>
  </tr>
  </tbody>\n";
}  
?> 
</table>
</body>
</html>