<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Portfolio - Equipa</title>
	
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
	
		<h1 class="page-title">Melhor Equipa de Sempre</h1>

		<ul id="portfolio-items-filter">

			<li>Mostrar</li>
			<li><a data-categories="*">Todos</a></li>
			<li><a data-categories="prog">Programadores</a></li>
			<li><a data-categories="ana">Analistas</a></li>
			<li><a data-categories="qual">Qualidade</a></li>
			<li><a data-categories="gestao">Gestão</a></li>
		</ul><!-- end #portfolio-items-filter -->
		
	</header><!-- end .page-header -->

	<section id="portfolio-items" class="clearfix">

		<article class="one-fourth" data-categories="gestao">

			<a href="#" class="project-meta" title="Francisca Lima - Gestora de Projeto">
				<img src="../img/idis/fl.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Francisca Lima</h5>
				<span class="categories">Gestora de Projeto</span>
			</a>
			
		</article><!-- end .one-fourth (Altered) -->
		
		<article class="one-fourth" data-categories="gestao">

			<a href="#" class="project-meta" title="Francisca Lima - Gestora de Projeto">
				<img src="../img/idis/ec.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Eduarda Costa</h5>
				<span class="categories">Arquiteta de Software</span>
			</a>
			
		</article><!-- end .one-fourth (Altered) -->

		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="Snow Tower - ">
				<img src="../img/idis/lc.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Luis Cunha</h5>
				<span class="categories">Programador Web</span>
			</a>
			
		</article><!-- end .one-fourth (Snow Tower) -->

		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="Not the end - The beginning of the end.">
				<img src="../img/idis/ls.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Luis Silva</h5>
				<span class="categories">Programador Web</span>
			</a>
			
		</article><!-- end .one-fourth (Not the end) -->

		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="Shift - Abstract animation using Modo &amp; After Effects.">
				<img src="../img/idis/bf.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Bruno Faria</h5>
				<span class="categories">Chefe Programadores</span>
			</a>
			
		</article><!-- end .one-fourth (Shift) -->

		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="Synergy - The name says it all.">
				<img src="../img/idis/lso.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Luis Soares</h5>
				<span class="categories">Programador Java</span>
			</a>
			
		</article><!-- end .one-fourth (Synergy) -->

		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="The Game - Canon 5D Canon 28mm f/2.8 Studio Shot.">
				<img src="../img/idis/jc.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Joana Costa</h5>
				<span class="categories">Programadora Java</span>
			</a>
			
		</article><!-- end .one-fourth (The Game) -->

		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="Trantor - planet city">
				<img src="../img/idis/lr.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Lisete Ribeiro</h5>
				<span class="categories">Programadora Java</span>
			</a>
			
		</article><!-- end .one-fourth (Trantor) -->
		
		<article class="one-fourth" data-categories="ana">

			<a href="#" class="project-meta" title="Futurisk - ">
				<img src="../img/idis/ss.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Susana Silva</h5>
				<span class="categories">Analista</span>
			</a>
			
		</article><!-- end .one-fourth (Futurisk) -->

		<article class="one-fourth" data-categories="ana">

			<a href="#" class="project-meta" title="Futurisk - ">
				<img src="../img/idis/ap.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Ana Pereira</h5>
				<span class="categories">Analista</span>
			</a>
			
		</article><!-- end .one-fourth (Futurisk) -->

		<article class="one-fourth" data-categories="ana">

			<a href="#" class="project-meta" title="Forrst Android App UI Design Mockups - UI design for a Forrst Android App concept.">
				<img src="../img/idis/do.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Daniela Oliveira</h5>
				<span class="categories">Analista</span>
			</a>
			
		</article><!-- end .one-fourth (Forrst Android App UI Design Mockups) -->

		<article class="one-fourth" data-categories="ana">

			<a href="#" class="project-meta" title="Forbidden Words - ">
				<img src="../img/idis/ja.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">João Amaral</h5>
				<span class="categories">Analista</span>
			</a>
			
		</article><!-- end .one-fourth (Forbidden Words) -->
		
		<article class="one-fourth" data-categories="ana">

			<a href="#" class="project-meta" title="Forbidden Words - ">
				<img src="../img/idis/lm.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Luis Marinho</h5>
				<span class="categories">Analista</span>
			</a>
			
		</article><!-- end .one-fourth (Forbidden Words) -->
		
		<article class="one-fourth" data-categories="qual">

			<a href="#" class="project-meta" title="Forbidden Words - ">
				<img src="../img/idis/di.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Daniela Igreja</h5>
				<span class="categories">Coordenadora de Qualidade</span>
			</a>
			
		</article><!-- end .one-fourth (Forbidden Words) -->
		
		<article class="one-fourth" data-categories="qual">

			<a href="#" class="project-meta" title="Forbidden Words - ">
				<img src="../img/idis/ht.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Hugo Torres</h5>
				<span class="categories">Auditor de Qualidade</span>
			</a>
			
		</article><!-- end .one-fourth (Forbidden Words) -->
		
		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="The Game - Canon 5D Canon 28mm f/2.8 Studio Shot.">
				<img src="../img/idis/ep.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Eduardo Peixoto</h5>
				<span class="categories">Base de Dados</span>
			</a>
			
		</article><!-- end .one-fourth (The Game) -->
		
		<article class="one-fourth" data-categories="prog">

			<a href="#" class="project-meta" title="The Game - Canon 5D Canon 28mm f/2.8 Studio Shot.">
				<img src="../img/idis/ar.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Andre Rocha</h5>
				<span class="categories">Base de Dados</span>
			</a>
			
		</article><!-- end .one-fourth (The Game) -->
		
		<article class="one-fourth" data-categories="prog">

			<a href="#" class="single-image" title="The Game - Canon 5D Canon 28mm f/2.8 Studio Shot.">
				<img src="../img/idis/fs.png" alt="">
			</a>

			<a href="#" class="project-meta">
				<h5 class="title">Filipe Salgado</h5>
				<span class="categories">Base de Dados</span>
			</a>
			
		</article><!-- end .one-fourth (The Game) -->

	</section><!-- end #portfolio-items -->
	
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