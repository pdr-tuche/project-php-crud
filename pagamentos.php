

<?php

if(ISSET($_GET['id'])){

$id = $_GET['id'];

$sql = "INSERT INTO carrinho (`id_pessoa`, `produto`) VALUES ('$user_id', '$id')";
$insert = mysqli_query($conexao, $sql);

if(!$insert)
    echo "Ocorreu um erro ao cadastrar no banco de dados. ";

}

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
            <th>Produto</th>
            <th>Imagem</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        <?php         
        $busca = "Select * from carrinho WHERE id_pessoa = '$user_id'";
        $todos = mysqli_query($conexao, $busca);
        while ($dadosCarrinho=mysqli_fetch_array($todos)) { 

        echo $id = $dadosCarrinho['produto'];
            
        $busca = "Select * from produtos WHERE id = '$id'";
        $todos = mysqli_query($conexao, $busca);
        while ($produto=mysqli_fetch_array($todos)){ 
        ?>
        
            <tr>
                <td><?=$dadosCarrinho['id'];?></td>
                <td><?=$dadosCarrinho['produto'];?></td>
                <td><?=$produto['imagem'];?></td>
                <td><?=$produto['preco']; ?></td>
            </tr>
                      
            
        <?php } } ?>
        <tr>
                <td>Total: </td>
             </tr>
    </tbody>
</table>
<?php include_once("./rodape.php")?>

</body>
</html>

<?php
// Fechar a conexão
mysqli_close($conexao);
?>

