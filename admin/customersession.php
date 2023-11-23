<?php
session_start();

$usuario = $_POST['username'];
$senha = $_POST['password'];

$conexao = mysqli_connect("localhost", "root", "", "blog");

$query = "SELECT * FROM login_user WHERE usuario ='$usuario' and senha = '$senha'";

if ($result=mysqli_query($conexao, $query)) {

  $linha = mysqli_fetch_array($result);
  if(!empty($linha)){
    $_SESSION['usuario'] = $linha['usuario'];
    $_SESSION['senha'] = $linha['senha'];
    $_SESSION['id'] = $linha['id'];
    header("Location: index.php");
  }else{
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    unset($_SESSION['id']);
    header("Location: login.php?msg=LOGIN_ERROR");
  }
    //header("Location: login.php?msg=OK");
} else {
    header("Location: login.php?msg=ERRO");
}
?>
<!-- php -->