
<?php
include "config.inc.php";
### pelo método get 

$excluir = $_GET["id"];


$sql = "DELETE FROM `login_user` WHERE id = $excluir";

//echo $sql;

$delete = mysqli_query($conexao, $sql);

if(!$delete){
    echo "Ocorreu um erro ao deletar no banco de dados. <a href='./?pg=listar'>Tente Novamente</a>";
}else{
   echo "<h3>Deletado com sucesso!</h3><br><a href='./?pg=listar'>Voltar</a>";
}
?>