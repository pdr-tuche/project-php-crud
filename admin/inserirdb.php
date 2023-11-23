<?php include "config.inc.php"; ?>
<?php

$imagem = $_POST['imagem'];
$titulo= $_POST['titulo'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produtos (`titulo`, `img`, `preco`) VALUES 
('$titulo', '$imagem', '$preco')";

//echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='?pg=inserir'>Cadastrar Novamente</a><br>";
   echo "<a href='?pg=listar'>Listar produtos</a>";
}
?>
<!-- php -->