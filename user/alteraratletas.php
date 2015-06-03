<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<?php
session_start();
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<title>S.C.Braga - Voleibol</title>
	
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="css/style.css" media="screen" />

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
		
		<link rel="stylesheet" href="css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'js/video-js.swf';</script>
</head>
<body>

<header id="header" class="container clearfix">

	<a href="principal.php" id="logo">
		<img src="img/logo4.png" alt="SmartStart">
	</a>

	<nav id="main-nav">
		
		<ul>
			<li class="current">
				<a href="principal.php" data-description="Página Inicial">Home</a>
				<ul>
					<li><a href="noticiasfeed.php">Noticias</a></li>
					<li><a href="proxjogos.php">Próximos Jogos</a></li>
				</ul>
			</li>
			<li>
				<a href="#" data-description="escalões e calendário">Equipa</a>
				<ul>

					<li><a href="#">Cadetes</a>
						<ul>
							<li><a href="adminjogadorascadetes.php">Plantel</a></li>
							<li><a href="ResultCadetes.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Juvenis</a>
						<ul>
							<li><a href="adminjogadorasjuvenis.php">Plantel</a></li>
							<li><a href="ResultJuvenis.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Juniores</a>
						<ul>
							<li><a href="adminjogadorasjuniores.php">Plantel</a></li>
						    <li><a href="ResultJuniores.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Séniores</a>
						<ul>
							<li><a href="adminjogadorasseniores.php">Plantel</a></li>
							<li><a href="ResultSeniores.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Calendário</a>
						<ul>
							<li><a href="calendariojogos.php">Jogos</a></li>
							<li><a href="calendariotreinos.php">Treinos</a></li>
						</ul>
					</li>

				</ul>
			</li>
			
			<li>
				<a href="#" data-description="Painel Instruções">Painel</a>
				<ul>

					<li><a href="estatisticasgerais.php">Estisticas</a></li>
					<li><a href="listarjogadores.php">Gestão de Atletas</a></li>
					<li><a href="gradesjogadoraslista.php">Gestão Académica</a></li>
					<li><a href="noticias.php">Gestão de Noticias</a></li>
					<li><a href="pagamentos.php">Pagamentos</a></li>
					
				</ul>
			</li>
			<li>
				<a href="contactos.php" data-description="Fale Conosco">Contactos</a>
			</li>
			<li>
				<a href="#" data-description="area pessoal">Área Pessoal</a>

				<ul>
					  <li><a href="altpassword.php">Alterar Password</a></li>
					<li><a href="../sair.php">Sair</a></li>
				</ul>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

	<header class="page-header">
	
		<h1 class="page-title">Área de Alteração de dados:</h1>
			<p>Aqui podera atualizar os seus dados pessoais! <p>
	</header><!-- end .page-header -->
	
	<section id="main" >
	<?php
// Inclui arquivo de conexão
include("mysql.connect.php");

$_GET["name"];
$utilizador = $_GET["name"];
$expressao = "SELECT * FROM athlete WHERE name = '$utilizador'  ";
    $resultado = mysql_query($expressao);
      while ($registo = mysql_fetch_array($resultado)){ 
	$idplayer2 = $registo["id_athlete"];
		$name2 = $registo["name"];
	  	$birth2 = $registo["birth_date"];
		$address2 = $registo["address"];
		$height2 = $registo["height"];
		$weight2 = $registo["weight"];
		$email2 = $registo["email"];
		$photo2 = $registo["photo"];
		$phone_number2 = $registo["phone_number"];
		$gender2 = $registo["gender"];
		$active2 = $registo["active"];
		$descricao2 = $registo["description"];
		$niss2 = $registo["niss"];
		$num_cc2 = $registo["num_cc"];
		$num_health2 = $registo["num_health"];
		$user2 = $registo["user"];
		$pass2 = $registo["pass"];
		$blood2 = $registo["blood_type"];
		$nib2 = $registo["nib"];
		$team2 = $registo["team"];
		$jersey2 = $registo["jersey_number"];

										
       } ?>
	     <form action="validaralteracao.php" method ="POST"> 
			<div class="form_settings">
			<br><span>id:<input readonly type="text" name="id3" value="<?php echo $idplayer2; ?>">
			<br><span>Password:<input type="text" name="pass3" value="<?php echo $pass2; ?>">
			<br><span>Morada:<input type="text" name="morada3" value="<?php echo $address2; ?>">
			<br><span>Altura:<input type="float" name="altura3" value="<?php echo $height2; ?>">
			<br><span>Peso:<input type="float" name="peso3" value="<?php echo $weight2; ?>">
			<br><span>Email:<input type="text" name="email3" value="<?php echo $email2; ?>">
			<br><span>Telefone:<input readonly type="integer" name="telefone3" value="<?php echo $phone_number2; ?>">
			<br><span>Tamanho Camisola:<input readonly type="text" name="jersey3" value="<?php echo $jersey2; ?>">
			<br><span>Numero Bancario:<input readonly type="integer" name="nib3" value="<?php echo $nib2; ?>">
	
			<br>
			<br>
			<input type="submit" value="Guardar">

		</div>

		</form>
	   
	</section><!-- end #main -->


</section><!-- end #content -->

<footer id="footer" class="clearfix">

	<div class="container">

		<div class="three-fourth">

			<nav id="footer-nav" class="clearfix">

				<ul>
					
				</ul>
				
			</nav><!-- end #footer-nav -->

			<ul class="contact-info">
				<li class="address">Largo do Paço, 4704-553 Braga</li>
				<li class="phone">(253) 254-711</li>
				<li class="email"><a href="mailto:idismiegsi@gmail.com">Contactar SC Braga</a></li>
			</ul><!-- end .contact-info -->
			
		</div><!-- end .three-fourth -->

		<div class="one-fourth last">

			<span class="title">Siga-nos no:</span>

			<ul class="social-links">
				<li class="facebook"><a href="https://www.facebook.com/scbragavoleibol?fref=ts">Facebook</a></li>
				<li class="youtube"><a href="https://www.youtube.com/channel/UCP1s6J48CgQaPxU6bKc3d4A">YouTube</a></li>
			</ul><!-- end .social-links -->

		</div><!-- end .one-fourth.last -->
		
	</div><!-- end .container -->

</footer><!-- end #footer -->

<footer id="footer-bottom" class="clearfix">

	<div class="container">

		<ul>
			<li>IDIS &copy; 2014</li>
			<li><a href="portfolio.php">A equipa IDIS</a></li>
				<li><a href="noticiascfeed.php">Feed Noticias</a></li>
		</ul>

	</div><!-- end .container -->

</footer><!-- end #footer-bottom -->

<!--[if !lte IE 6]><!-->
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
	<script src="js/jquery.ui.widget.min.js"></script>
	<script src="js/respond.min.js"></script>
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.smartStartSlider.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/audioplayerv1.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/custom.js"></script>

<!--<![endif]-->
</body>

</html>