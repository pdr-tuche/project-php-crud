<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Swift Experience</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">The Swift Experience</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">Sobre</a>
                <a href="service.html" class="nav-item nav-link">Serviços</a>
                <a href="product.html" class="nav-item nav-link">Produtos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="gallery.html" class="dropdown-item">Gallery</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Início do Contato -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Meios de Contato</p>
            <h1 class="mb-5">Se você tiver alguma dúvida, entre em contato conosco</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-4">Precisa de um formulário de contato funcional?</h3>
                <p class="mb-4">O formulário de contato está atualmente inativo. Obtenha um formulário de contato funcional e operante com Ajax e PHP em poucos minutos. Basta copiar e colar os arquivos, adicionar um pouco de código e pronto. <a href="https://htmlcodex.com/contact-form">Baixe Agora</a>.</p>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                                <label for="name">Seu Nome</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Seu Email">
                                <label for="email">Seu Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Assunto">
                                <label for="subject">Assunto</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Deixe uma mensagem aqui" id="message" style="height: 250px"></textarea>
                                <label for="message">Mensagem</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4">Detalhes de Contato</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-map-marker-alt text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Nosso Escritório</h6>
                        <span>Centro universitario Unipê</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-phone-alt text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Ligue para Nós</h6>
                        <span>+55 83 0000000-00</span>
                    </div>
                </div>
                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-envelope text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Nos Envie um Email</h6>
                        <span>info@example.com</span>
                    </div>
                </div>

                <iframe class="w-100 rounded"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2322942443833!2d-34.9138354853449!3d-7.206681494764703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ae2ca3c74d81c1%3A0xf4291f18df4d5a69!2sCentro%20Universit%C3%A1rio%20de%20Jo%C3%A3o%20Pessoa%20-%20UNIP%C3%8A!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Fim do Contato -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Nosso Escritorio</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Centro Universitário de João Pessoa - UNIPÊ</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>83 00000000</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>edyllauson.computerscience@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Precisa de ajuda?</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Horario comercial</h5>
                    <p class="mb-1">Terça - Quarta</p>
                    <h6 class="text-light">09:00 am - 17:10 pm</h6>
                    <p class="mb-1">Quinta - Sexta</p>
                    <h6 class="text-light">09:00 am - 17:00 pm</h6>
                    <p class="mb-1">segunda</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Reclame aqui</h5>
                    <p>Queremos ouvir a sua voz! Sua opinião é valiosa para nós e nos ajuda a melhorar nossa aplicação. Se você tiver alguma sugestão, reclamação ou apenas desejar compartilhar suas experiências, por favor, use a seção 'Reclame Aqui' ou 'Opine Aqui'. Estamos comprometidos em aprimorar nossa aplicação com base no seu feedback. Obrigado por fazer parte do nosso processo de melhoria contínua</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



     <!-- Copyright Start -->
     <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">The Swift Experience</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>