<?php
include("conexao.php");
$id = $_GET["id"];
settype($id, "integer");

$sql = "select * from produtos where id = $id";
$query = mysqli_query($conn, $sql);
$dados  = mysqli_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Atualizar Produto</title>

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
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  font-family: 'Questrial', sans-serif;


}

table {
  width: 40%;

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

h2 {
  font-weight: 300;
  font-family: 'Questrial', sans-serif;
  color: #000000;
  text-align: center;


}
.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}
</style>
</head>

<body>
<img class="wave" src="img/wave.png">
<form id="formproduto" name="formproduto" method="post" action="edicaoproduto.php">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
  <h2>EDIÇÃO DE CADASTRO DE PRODUTOS</h2>
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Produto</td>
      <td width="209"><input name="Produto" type="text" id="Produto" value="<?php echo $dados["Produto"];?>" /></td>
    </tr>
    <tr>
      <td>Preço</td>
      <td><input name="Preco" type="text" id="Preco" value="<?php echo $dados["Preco"];?>" /></td>
    </tr>
	<tr>
      <td>Disponibilidade</td>
      <td><input name="Disponibilidade" type="text" id="Disponibilidade" value="<?php echo $dados["Disponibilidade"];?>" /></td>
    </tr>
    <tr>
      <td>Código</td>
      <td><input name="Codigo" type="text" id="Codigo" value="<?php echo $dados["Codigo"];?>" /></td>
    </tr>
    <tr>
	  <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Gravar" style="cursor:pointer"/></td> 
    </tr>
    </table>
    </form>
    </body>
    </html>
