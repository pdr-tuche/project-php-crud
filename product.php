<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>The Swift Experience</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/owl.carousel.min.js" rel="stylesheet">
    <link href="./assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    

      <!-- Product Start -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Nossos produtos</p>
                <h2 class="mb-5">Explore a coleção exclusiva de produtos Taylor Swift e deixe sua paixão pela música brilhar</h2>
            </div>
            <div class="row gx-4">

<?php 

include_once("conecta.inc.php");

// Inicializar as variáveis $item e $dadosCarrinho
$item = [];
$buscaCarrinho  = [];

// Inicializar o array $produtos
$produtos = [];

$query = mysqli_query($conexao, "SELECT * FROM produtos");
while ($item = mysqli_fetch_array($query)) {
    // Adicionar cada produto ao array $produtos
    $produtos[] = [
        'item' => [
            'id' => $item['id'],
            'img' => $item['img'],
            'titulo' => $item['titulo'],
            'preco' => $item['preco']
        ]
    ];
 ?>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $item['img']; ?> " alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="$dadosCarrinho"><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="?pg=pagamentos&id=<?= $item['id']; ?>&quantidade=1"><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4" >
                            <a class="d-block h5" href=""><?php echo $item['titulo']; ?>  </a>
                            <div id="precos">
                                <h6 class="text-primary me-1">R$ <?php echo $item['preco'] - 10 ; ?> </h6>
                                <h6 class="text-decoration-line-through">R$ <?php echo $item['preco']; ?> </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

               
               
              
            </div>
        </div>
      <div class="product-overlay">
           <a class="btn btn-square btn-secondary rounded-circle m-1" id="shopping" href="?pg=pagamentos"><i class="bi bi-cart"></i></a>
    </div>
    </div>
    <!-- Product End -->


   


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