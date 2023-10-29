<?php
    $conexao = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($conexao, "farmacia");

    $query = mysqli_query($conexao, "SELECT * FROM usuarios");

    while($tabela = mysqli_fetch_array($query)){
        echo $tabela['usuario'];
    }
?>
