<?php include "config.inc.php";?>
<?php

$id =           $_POST['id'];
$usuario =      $_POST['usuario'];
$email =        $_POST['email'];
$senha =        $_POST['senha'];

$name = md5(time() . rand(0,999) * 10);
if(!move_uploaded_file($_FILES["perfil"]["tmp_name"], "C:/xampp/htdocs/Quero-farmacia/admin/perfil-img/{$name}.png"))
echo "Erro ao mover";
$url = "http://localhost/Quero-farmacia/admin/perfil-img/".$name.".png";

$sql = "UPDATE login_user SET usuario='$usuario', perfil='$url', email='$email', senha='$senha' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=list_user'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=list_user'>Voltar</a>";
}
?>
<!-- php -->