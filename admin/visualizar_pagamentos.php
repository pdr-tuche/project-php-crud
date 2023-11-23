<?php
include "config.inc.php";

require_once "valida_coo.inc.php";


?>

<!-- php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visulizar Pagamentos</title>
    <!-- Custom icons for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <script language='javascript'>
        function confirmaExclusao(aURL) {

            if (confirm('Você tem certeza que deseja excluir?')) {
                location.href = aURL;
            }
        }
    </script>
    <?php include "config.inc.php"; ?>


    <table>
        <tr style="background-color: black;color:white; height:3rem;">
            <td style="width: 170px;">Id</td>
            <td style="width: 205px;">Produto</td>
            <td style="width: 109px;">Imagem</td>
            <td style="width: 205px;">Preço</td>
            <td style="width: 105px;">Excluir</td>
        </tr>
        <?php
        $Total = 0;
        $user_id = $_SESSION['id'];
        $buscaCarrinho = "SELECT * from carrinho WHERE id_pessoa = '$user_id'";
        $todosCarrinho = mysqli_query($conexao, $buscaCarrinho);
        while ($dadosCarrinho = mysqli_fetch_array($todosCarrinho)) {

            $id = $dadosCarrinho['produto'];

            $buscaProduto = "SELECT * from produtos WHERE id = '$id'";
            $todosProdutos = mysqli_query($conexao, $buscaProduto);
            while ($produto = mysqli_fetch_array($todosProdutos)) {
                $Total = $Total + $produto['preco'];
        ?>

                <tr style="background-color: grey;">
                    <td><?= $dadosCarrinho['id']; ?></td>
                    <td><?= $produto['titulo']; ?></td>
                    <td><img src="<?= $produto['img']; ?>" alt="" width="150" style="padding:1rem; width:100%;"></td>
                    <td><?= $produto['preco']; ?></td>
                    <td><a href="javascript:confirmaExclusao('excluir_pagamentos.php?&id=<?= $dadosCarrinho['id']; ?>')" class="ask">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" id="delete" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg></a></td>
                </tr>

        <?php }
        } ?>


    </table>

</body>

</html>

<?php
// Fechar a conexão
mysqli_close($conexao);
?>