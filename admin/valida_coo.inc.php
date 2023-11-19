<?php
session_start();
if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
}
if(isset($_SESSION['senha'])){
    $senha = $_SESSION['senha'];
}
if(empty($usuario) OR empty($senha)){
        setcookie("usuario");
        setcookie("senha");
        echo "Login não efetuado.";
        echo "<a href=login.php> Clique para logar.</a>";
        exit();
 }

 ?>

