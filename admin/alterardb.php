<?php include "config.inc.php";?>
<?php

$id =           $_POST['id'];
$titulo =       $_POST['titulo'];
$imagem =    $_POST['imagem'];
$preco =        $_POST['preco'];


$sql2 = mysqli_query($conexao, "SELECT * FROM produtos WHERE id='$id'");

$sql = "UPDATE produtos SET titulo='$titulo', img='$imagem', preco='$preco' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar'>Voltar</a>";
}
?>
<!-- php -->