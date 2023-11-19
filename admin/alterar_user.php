<?php  include "config.inc.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM login_user WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Usuário:</td>
        <td><input name="titulo" type="text" value="<?=$dados['usuario'];?>"/></td>
    </tr>
    <tr> 
        <td>E-mail:</td>
        <td><input name="imagem" type="text" value="<?=$dados['email'];?>"/></td>
    </tr>
    <tr>
        <td>Senha:</td>
        <td><input name="preco" type="number" value="<?=$dados['senha'];?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>
<?php 
}
?>