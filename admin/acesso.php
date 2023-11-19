<?php
include_once("config.inc.php");

$login = $_POST['usuario'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM login_user WHERE usuario = '$usuario' AND senha = '$senha'";
$query = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($query);

if ($linhas == 0) {
    echo "<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos $usuario | $senha');
            window.location.href='login.php';
          </script>";
    die();
} else {
    setcookie("usuario", $usuario);
    setcookie("senha", $senha);
    header("Location: index.php");
}
?>
