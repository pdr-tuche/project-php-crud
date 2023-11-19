<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
</head>
<body>

<style>
   

</style>

<?php  include "config.inc.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form id="alterar-produto" action="?pg=alterardb" method="post" >
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table style="justify-content: center; width:100%; display:flex;">
    <tr>
        <td>Título do produto </td>
        <td><input id="input" name="titulo" type="text" value="<?=$dados['titulo'];?>"/></td>
    </tr>
    <tr> 
        <td>Imagem </td>
        <td><input id="input" name="imagem" type="text" value="<?=$dados['img'];?>"/></td>
    </tr>
    <tr>
        <td>Preço</td>
        <td><input id="input" name="preco" type="number" value="<?=$dados['preco'];?>"></td>
    </tr>
    
        <tr class="alterar-botao">
            <td id="alterar"><input id="enviar" name="Enviar" type="submit" value="Cadastrar"></td>
        </tr>
</table>
</form>
<?php 
}
?>
</body>
</html>

