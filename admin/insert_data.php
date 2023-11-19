<?php include_once("./config.inc.php")?>
<?php
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['passwd'];

// Correção na conexão com o banco de dados

// Verificar a conexão

$sql = "INSERT INTO login_user (`usuario`, `email`, `senha`) VALUES ('$username', '$email', '$password')";

// Executar a consulta
$insert = mysqli_query($conexao, $sql);

if ($insert) {
    header("Location: login.php?msg=OK");
} else {
    header("Location: login.php?msg=ERRO");
}

// Fechar a conexão
mysqli_close($conexao);
?>