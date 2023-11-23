<?php  include "config.inc.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM login_user WHERE id = $id";
$busca = mysqli_query($conexao, $sql);


while($dados=mysqli_fetch_array($busca)){
    
?>

<form id="inserir" action="?pg=alterardb2user"  enctype="multipart/form-data" style="display: flex; width:100%; justify-content:center" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Usuário:</td>
        <td><input class="input" name="usuario" type="text" placeholder="Nome" value="<?=$dados['usuario'];?>"/></td>
    </tr>
    <tr>
        <td>Perfil:</td>
        <td><input type="file" name="perfil" id="perfil" accept="image/*"/></td>
    </tr>
    <tr> 
        <td>E-mail:</td>
        <td><input  class="input" name="email" placeholder="seu e-mail" type="text" value="<?=$dados['email'];?>"/></td>
    </tr>
    <tr>
        <td>Senha:</td>
        <td><input  class="input" name="senha" placeholder="sua senha" type="number" value="<?=$dados['senha'];?>"></td>
    </tr>
    <tr>
        <td></td>
        <td class="user_alter" id="enviar-inserir"><input type="submit" name="Enviar" value="Cadastrar"/></td>
    </tr>
</table>
</form>
<?php 
}
?>
<!-- php -->