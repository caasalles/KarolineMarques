<?php
    include("conexao.php");
   
    $quinzenal = $_POST["quinzenal"];
    $mensal = $_POST["mensal"];
    $anual = $_POST["anual"];

    
    $result_produtos = "INSERT INTO produtos(quinzenal, mensal, anual)
                    VALUES ('$quinzenal', '$mensal', '$anual')";
    $resultado_produtos = mysqli_query($conn, $result_produtos);
   
    if(mysqli_affected_rows($conn) != 0){
       
            }else{
                echo "Erro ao cadastrar";
                   
                 
            }
            
?>