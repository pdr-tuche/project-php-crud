<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<style>
    #pagamentos-tabela {
        align-items: center;
        flex-direction: column;
        display: flex;
        text-align: center;
        width: 100%;
        margin-bottom: 3rem;
        justify-content: center;
    }


    @media(max-width:800){
        #pagamentos-tabela {
            margin-bottom: 3rem;
        align-items: center;
        flex-direction: column;
        display: flex;
        text-align: center;
        width: 100%;
        justify-content: center;
    }

    .total-compras {
        padding: 0.5rem;
        display: flex;
        flex-direction: row;
        text-align: center;
        justify-content: center;
        width: 178%;
        font-size: 22px;
        color: black;
        font-weight: 800;
    }
    }
    h1 {
        padding: 3rem;
    }

    table {
        border: 1px solid black;
        border-collapse: collapse;
        width: 60%;
    }



    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .container {
        display: none;
    }

    .titulo-tabela {
        background-color: black;
        color: white;
        width: 20%;
        flex-direction: row;
        text-align: center;
    }
    .carrinho-produtos {
        background-color: #18313a;
        color: white;
        text-align: center;
    }

    .total-compras {
        padding: 0.5rem;
        display: flex;
        flex-direction: row;
        text-align: center;
        justify-content: center;
        width: 100%;
        font-size: 22px;
        color: black;
        font-weight: 800;
    }

    #delete:hover {
        width: 40px;
        transition: .3s all ease-in-out;
        height: 40px;
        background-color: #ffffff1f;
        border-radius: 50px;
        border: 6px solid #ffffff1f;
    }
</style>

<body>

    <script language='javascript'>
        function confirmaExclusao(aURL) {

            if (confirm('Você tem certeza que deseja excluir?')) {
                location.href = aURL;
            }
        }
    </script>


    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <section id="pagamentos-tabela">
        <table>
            <h1>Pagamentos</h1>
            <thead>
                <tr>
                    <th class="titulo-tabela">ID</th>
                    <th class="titulo-tabela">Produto</th>
                    <th class="titulo-tabela">Imagem</th>
                    <th class="titulo-tabela">Preço</th>
                    <th class="titulo-tabela">Excluir</th>
                </tr>
            </thead>
            <tbody>

                <?php

                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $quantidade = $_GET['quantidade'];

                    $sql = "INSERT INTO carrinho (`id_pessoa`, `produto`, `quantidade`) VALUES ('$user_id', '$id', $quantidade)";
                    $insert = mysqli_query($conexao, $sql);

                    if (!$insert)
                        echo "Ocorreu um erro ao cadastrar no banco de dados. ";
                }

                ?>

                <?php

                $Total = 0;

                $buscaCarrinho = "SELECT * from carrinho WHERE id_pessoa = '$user_id'";
                $todosCarrinho = mysqli_query($conexao, $buscaCarrinho);
                while ($dadosCarrinho = mysqli_fetch_array($todosCarrinho)) {

                    $id = $dadosCarrinho['produto'];

                    $buscaProduto = "SELECT * from produtos WHERE id = '$id'";
                    $todosProdutos = mysqli_query($conexao, $buscaProduto);
                    while ($produto = mysqli_fetch_array($todosProdutos)) {
                        $Total = $Total + $produto['preco'];
                ?>

                        <tr>
                            <td class="carrinho-produtos"><?= $dadosCarrinho['id']; ?></td>
                            <td class="carrinho-produtos"><?= $produto['titulo']; ?></td>
                            <td class="carrinho-produtos"><img src="<?= $produto['img']; ?>" alt="" width="150" style="padding:1rem; justify-content: center"></td>
                            <td class="carrinho-produtos"><?= $produto['preco']; ?></td>
                            <td class="carrinho-produtos"><a href="javascript:confirmaExclusao('excluir_pagamentos.php?&id=<?= $dadosCarrinho['id']; ?>')" class="ask">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" id="delete" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg></a></td>
                        </tr>


                <?php }
                } ?>



                <tr class="total-compras">
                    <td>Total: R$ <?= $Total; ?></td>
                </tr>
            </tbody>
        </table>
    </section>




    
   
    
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/lib/wow/wow.min.js"></script>
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script src="./assets/lib/waypoints/waypoints.min.js"></script>
    <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./assets/lib/counterup/counterup.min.js"></script>
    <script src="./assets/lib/parallax/parallax.min.js"></script>
    <script src="./assets/lib/lightbox/js/lightbox.min.js"></script>
    
    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>
    
    
    
    
</body>

</html>

