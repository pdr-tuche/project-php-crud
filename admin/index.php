<?php
include "config.inc.php";

require_once "valida_coo.inc.php";


?>
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Taylor Swift Tour</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/r">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/" rel="stylesheet">

    <!-- Custom icons for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../assets/img/TAYLORSWIFTSLIDER2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Configure seus dados</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../assets/img/TAYLORBANNERSLIDER.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Bem-vindo ao Painel Admin</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Acessibilidade -->

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget();
    </script>
    <!-- Fim da Acessibilidade -->






    <!-- Page Content -->
    <div id="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="page-header">Painel </h1>
        
        <div class="painel-perfil">
    <div class="img-perfil">
        <?php if (isset($dados) && is_array($dados)) : ?>
            <?php
            // Assuming $dados contains the user data, including the profile image path
            $profileImage = $dados['profile_image']; // Update 'profile_image' to the actual key

            // Ensure the profile image path is not empty before displaying
            if (!empty($profileImage)) {
                echo '<img src="' .$perfil. '" alt="Profile Image">';
            } else {
                echo '<img src="path_to_default_image.jpg" alt="Default Image">'; // Provide a default image path
            }
            ?>
            <h1 style="color: white;"><?= $dados['usuario']; ?></h1>
        <?php else : ?>
            <h1 style="color: white; font-size: 22px; margin-top:1rem;">Usuário não encontrado</h1>
        <?php endif; ?>
    </div>
</div>

<?php



?>



        <div class="wrap">
            <div class="menu">
                <ol class="breadcrumb">
                    <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                            </svg>Home</a>
                    </li>
                    <li class="active"><a href="?pg=listar"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" viewBox="0 0 384 512">
                                <path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM305 273L177 401c-9.4 9.4-24.6 9.4-33.9 0L79 337c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L271 239c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                            </svg>Listar Produtos</a></li>
                    <li class="active"><a href="?pg=inserir"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z" />
                            </svg>Inserir Novo Produto</a></li>
                    <li class="active"><a href="?pg=inserir"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" viewBox="0 0 576 512">
                                <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z" />
                            </svg>Pagamentos</a></li>
                    <li class="active"><a href="?pg=visualizar-faleconosco"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" viewBox="0 0 512 512">
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>Visualizar FAQ</a></li>
                    <li class="active"><a href="?pg=list_user"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                            </svg>Visualizar Usuários</a></li>
                    <li class="active" id="exit"><a href="./logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" id="exit1" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>Sair</a></li>
                </ol>
            </div>
            <div class="admin" id="admin">
                <!-- Content Row -->
                <?php
                // Declarando as variáveis de acesso as páginas
                $var = "admin/home.php";
                // o @ suprime avisos de erro do PHP.

                // Utilizando a variável Superglobal SERVER
                // Para testar se o parâmetro Query_String está
                // sendo utilizado.

                if (array_key_exists("pg", $_GET)) {
                    $pg = $_GET['pg'];
                    include("$pg.php");
                } else {
                }
                ?>

            </div>

        </div>


    </div>

    <script>
  // Function to toggle the visibility of the admin div
  function toggleAdminVisibility() {
    var adminDiv = document.getElementById("admin");

    // Check if the current page is the home page
    if (window.location.pathname.indexOf("index.php") !== -1 || window.location.search.indexOf("pg=index") !== -1) {
      adminDiv.style.display = "none"; // Hide the admin div
    } else {
      adminDiv.style.display = "block"; // Show the admin div
    }
  }

  // Call the function when the page loads
//   window.onload = toggleAdminVisibility;

  function adminAparecer(){
    var visibility = document.getElementById("admin");

    if (window.location.search == "" || window.location.search == "?pg=index"){
       visibility.style.display = "none";
    } else{
        visibility.style.display = "block";
    }
  }

  window.onload = adminAparecer;
 
</script>


    <!-- /.container -->

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


    <!-- Copyright End -->
</body>

</html>