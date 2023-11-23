<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
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
 <style>
    .faq-form b{
        color: black;
    }

    .faq-container{
        padding: 2rem;
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    .formulario{
        width: 100%;
    }
 </style>
    
    <section class="faq-container">
    <div class="faq-title"> 
        <h1>FAQ</h1>
    </div>

    <div class="col-lg-3 col-md-6">
                <div class="formulario">
          
            <form method="post" class="faq-form" id="formulario" action="?pg=faleconosco">
                <label for="nome"><b>Nome:</b></label>
                <input type="text" class="input" name="nome" autocomplete="off">
                <label for="email" id="email"><b>E-mail:</b></label>
                <input type="text" class="input" name="email">
                <label for="mensagem" id="mensagem"><b>Mensagem:</b></label>
                <textarea name="mensagem" class="input"></textarea>
               
                <div class="button-container">
                    <input class="button" type="submit" value="Enviar">

                </div>
               
            </form>
</div>
            </div>
</section>
    

<?php
		include_once('./rodape.php');
	?>



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
