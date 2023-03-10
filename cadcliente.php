<?php
    include_once("conexao.php");
   
    $nome = $_POST["Nome"];
    $rg = $_POST["RG"];
    $cpf = $_POST["CPF"];
    $pai = $_POST["PAI"];
    $mae = $_POST["MÃE"];
    $email = $_POST["EMAIL"];
    $telefone = $_POST["Telefone"];
    
    $result_cliente = "INSERT INTO cliente(Nome, RG, CPF, PAI, MÃE, Email, Telefone)
                    VALUES ('$nome','$rg', '$cpf', '$pai', '$mae', '$email', '$telefone')";
    $resultado_cliente = mysqli_query($conn, $result_cliente);
   
    if(mysqli_affected_rows($conn) != 0){
                echo "Cliente cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
                   
                 
            }
            
?>