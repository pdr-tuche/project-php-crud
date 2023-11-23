

<?php
include "conecta.inc.php";
### pelo método get 

$excluir = $_GET["id"];


$sql = "DELETE FROM `carrinho` WHERE id = $excluir";

//Echo $sql;

$delete = mysqli_query($conexao, $sql);

if(!$delete){
    echo "Ocorreu um erro ao deletar no banco de dados. <a href='./?pg=pagamentos'>Tente Novamente</a>";
}else{
   echo "<h3>Deletado com sucesso!</h3><br><a href='./?pg=pagamentos'>Voltar</a>";
}
?>