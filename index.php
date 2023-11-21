<?php
session_start();

include_once("admin/config.inc.php");

$usuario = $_SESSION['usuario'];

$busca = "Select * from login_user WHERE usuario = '$usuario'";
$todos = mysqli_query($conexao, $busca);

while ($dados=mysqli_fetch_array($todos)) {
echo $user_id = $dados['id'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">


<head>
    <title>Taylor Swift Tour</title>
    <link rel="stylesheet" type="text/css" 
          href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/css/menu.css">
	<link rel="stylesheet" href="./assets/css/rodape.css">
	 <link rel="stylesheet" href="./assets/css/pagamentos.css">
	<link rel="stylesheet" href="./assets/css/faleconosco.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="icon" href="./assets/img/logo-taylor-swift.png">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
	<script src="./assets/js/menu.js"></script>
	<script src="./assets/js/main.js"></script>
	
</head>
<body>
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

   <?php
   include_once('./conecta.inc.php');
   include_once('./menu.php');

	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "./albums.php";
	        include_once("$var");
	} else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	<?php
		include_once('./rodape.php');
	?>
	
</body>


</html>
