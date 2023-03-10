<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
    header("Location: index.html"); exit;
}
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "nutri";
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_error()) trigger_error(mysqli_connect_error());

$email = ($_POST['email']);
$senha = ($_POST['senha']);

// Validação do usuário/senha digitados
$sql = "SELECT `id`, `nome`, `email` FROM `login` WHERE (`email` = '". $email ."') 
AND (`senha` = '". ($senha) ."')";
$query = $mysqli->query($sql);
if (mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido! <p><a href=\"index.html\">clique aqui para voltar</a></p>"; exit;
} else {
    // Salva os dados encontados na variável $resultado
    $resultado = mysqli_fetch_assoc($query);
        $_SESSION["email"] = $_POST["email"];
        header("Location:painel.php");
}
    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();{

    // Salva os dados encontrados na sessão
    $_SESSION['id'] = $resultado['id'];
    $_SESSION['nome'] = $resultado['nome'];
}   
//$mysqli->close();
?>