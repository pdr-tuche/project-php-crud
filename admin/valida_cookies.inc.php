<?php
session_start();
print $_SESSION;
if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
}
if(isset($_SESSION['senha'])){
    $senha = $_SESSION['senha'];
}
if(!(empty($usuario) OR empty($senha))){
    $sql = "SELECT * FROM login_user WHERE usuario = '$usuario' AND senha = '$senha'";
    $query = mysqli_query($conexao, $sql);
    $linhas = $query-> rows;

    if($linhas == 0){
        setcookie("usuario");
        setcookie("senha");
        echo "Login não efetuado.";
        echo "<a href=login.php> Clique para logar.</a>0";
        exit();
    }else{
        echo "Login não efetuado.";
        echo "<a href=login.php> Clique para logar.</a>0";
        exit();
    }
}

?>