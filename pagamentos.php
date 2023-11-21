<?php include_once("./conecta.inc.php") ?>


<?php
// Conectar ao banco de dados
$conexao = mysqli_connect("localhost", "root", "", "blog");

// Consulta para buscar dados da tabela 'carrinho'
$buscaCarrinho = "SELECT * FROM carrinho ORDER BY id";
$resultadoCarrinho = mysqli_query($conexao, $buscaCarrinho);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Pagamentos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .container{
            display: none;
        }
    </style>
</head>
<body>

<table>
    <caption>Pagamentos</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Pessoa</th>
            <th>Produto</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Adicionar</th>
            <th>Remover</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        if(isset($_GET['id_pessoa'])){
            $id = strip_tags($_GET['id_pessoa']);
            var_dump($id);
        }
        
        ##  while ($dadosCarrinho = mysqli_fetch_array($resultadoCarrinho)) { 
            
            ##while ($row = mysqli_fetch_array($resultadoCarrinho)) {
               ## $dadosCarrinho[] = $row;
           ## }
          ##  $resultadoFinal = array_merge($produtos, $dadosCarrinho);?>
            <tr>
                <td><?=$dadosCarrinho['id'];?></td>
                <td><a href="?id_pessoa=1"></a></td>
                <td><?=$dadosCarrinho['produto'];?></td>
                <td><?=$dadosCarrinho['imagem'];?></td>
                <td><?=$dadosCarrinho['preco']; ?></td>
                <td><a href="?pg=adicionar&id=<?=$dadosCarrinho['id']; ?>">Adicionar</a></td>
                <td><a href="javascript:confirmaExclusao('excluir.php?&id=<?=$dadosCarrinho['id']; ?>')">Remover</a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
             <tr>
                <td>Total: </td>
             </tr>
          
            
        <?php ##} ?>
    </tbody>
</table>
<?php include_once("./rodape.php")?>

</body>
</html>

<?php
// Fechar a conexão
mysqli_close($conexao);
?>

