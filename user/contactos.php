<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Contactos - S.C.Braga Voleibol</title>
	
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

<section id="content" class="clearfix">

	<div class="container clearfix">

		<header class="page-header">
			<h1 class="page-title">Esperamos ter noticias suas brevemente!</h1>
			
		</header><!-- end .page-header -->

	</div><!-- end .container -->

	<section id="map">
		<p class="container">Ocorreu um erro durante o carregamento, verifica se o JavaScript esta ativo!</p>
	</section><!-- end #map -->

	<div class="container clearfix">
		
		<div class="one-fourth">

			<h3>S.C.Braga - Voleibol</h3>

			<p>Pavilhão Universidade do Minho<br/>
			Largo do Paço, 4704-553 Braga<br/>
			Portugal</p>

				<p>Telefone: (253) 254-711<br/>
				Fax: (253) 254-711<br/>
				Email: voleibol@braga.com<br/>
				Web: www.scbragavoleibol.com</p>
			
		</div><!-- end .one-fourth -->
		
		<div class="three-fourth last">

			<h3>Formulário de contacto:</h3>

			<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" class="contact-form">
			
				<p class="input-block">
					<label for="contact-name"><strong>Nome</strong> (Obrigatório)</label>
					<input type="text" name="name" value="" id="contactonome" required>
				</p>

				<p class="input-block">
					<label for="contact-email"><strong>Email</strong> (Obrigatório)</label>
					<input type="email" name="email" value="" id="contactoemail" required>
				</p>
				
				<p class="input-block">
					<label for="contact-subject"><strong>Assunto</strong></label>
					<input type="text" name="subject" value="" id="contactoassunto">
				</p>

				<p class="textarea-block">
					<label for="contact-message"><strong>A sua mensagem</strong> (Obrigatório)</label>
					<textarea name="message" id="contactomensagem" cols="88" rows="6" required></textarea>
				</p>
			
				<div class="hidden">
					<label for="contact-spam-check">Do not fill out this field:</label>
					<input name="spam-check" type="text" value="" id="contact-spam-check" />
				</div>

				<input type="submit" name="enviar" value="Enviar">

				<div class="clear"></div>

			</form>

		</div><!-- end .three-fourth.last -->

	</div><!-- end .container -->
		
</section><!-- end #content -->

<?php
// Chamar Função Enviar Email
if(isset($_POST['efetua'])) {
	$cnome= $_POST['contactonome'];
	$cmail= $_POST['contactoemail'];
	$cassunto= $_POST['contactoassunto'];
	$cconteudo= $_POST['contactomensagem'];
}
?>
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