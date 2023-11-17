<?php
    include "config.inc.php";

    require_once "valida_coo.inc.php";
        
?>

<!DOCTYPE html>
<html lang="pt">

>>>>>>> origin/alteracoes_edyllauson
<head>
    <title>Taylor Swift Tour</title>
    <link rel="stylesheet" type="text/css" 
          href="bootstrap/css/bootstrap.css">
   
	<link rel="stylesheet" href="./assets/css/menu.css">
	<link rel="stylesheet" href="./assets/css/topo.css">
	<link rel="icon" href="./assets/img/logo-taylor-swift.png">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
	<script src="./assets/js/menu.js"></script>
</head>
<body>
	<?php
	include_once('./menu.php');
	?>
	
	<div class='container'>
	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
	<?php
		include_once('./rodape.php');
	?>
</body>
</html>