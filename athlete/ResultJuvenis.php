<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<?php
session_start();
?>

<head>
	<meta charset="UTF-8">
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
		<img src="img/logo4.png" alt="SCBRAGA">
	</a>

	<nav id="main-nav">
		<ul>
			<li class="current">
				<a href="index.php" data-description="Página Inicial">Home</a>
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
					<li><a href="estatisticasgerais.php">Estatisticas</a></li>
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
					<li><a href="#">Ficha Pessoal</a>
						<ul>
							<li><a href="listardados.php">Listar Dados</a></li>
							<li><a href="altdadosatleta.php">Alterar Dados</a></li>
                            <li><a href="altpassword.php">Alterar Password</a></li>
						</ul>
					</li>
					
					<li><a href="minhasnotas.php">Notas Escolares</a></li>
					<li><a href="listatransferencias.php">Quotas</a></li>
					
				</ul>
			</li>
			<li>
				<a href="contactos.php" data-description="Fale Conosco">Contactos</a>
			</li>
			<li>
				<a href="#" data-description="area pessoal">Sair</a>

				<ul>
					<li><a href="../sair.php">Sair</a></li>
				</ul>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

	<header class="page-header" charset="utf-8">
	
	<?php $utilizador = $_SESSION['username']; ?>
		<h1 class="page-title">Resultados dos Juvenis:</h1>
			
	</header><!-- end .page-header -->
	
	<section id="main" >
	<div class="tabela" >
	<?php 
	

	
	
	include("mysql.connect.php"); 

$result = mysql_query('SELECT * FROM competition WHERE id_category= 3');
   echo "<table border='1' align='center'>
  <tr>

 <td>Data</td>
 <td>Equipa Casa</td>
 <td>Resultado</td>
 <td>Equipa Fora</td>
 <td>Competicao</td>
 </tr>";
 while($row = mysql_fetch_array($result)) {
 $team1 = $row['id_team1']; 
 $team2 = $row['id_team2'];
 $resultTeam1 = $row['resulltTeam1'];
 $resultTeam2 = $row['resulltTeam2'];
 
 $expressao = "SELECT * FROM team WHERE id_team = '$team1' ";
    $resultado = mysql_query($expressao);
      while ($registo = mysql_fetch_array($resultado)){ 
	$namet1 = $registo["name"]; }

$exp = "SELECT * from team WHERE id_team = '$team2'";
	$res = mysql_query($exp);
		while ($reg = mysql_fetch_array($res)){
		$namet2 = $reg["name"];}
		
	
	
	$x = "-";
	
 echo "<tr align='center'>";
   echo "<td>" . $row['date'] . "</td>";
   echo "<td>" . $namet1. "</td>";
     echo "<td>".$resultTeam1. "&nbsp".$x."&nbsp".$resultTeam2."</td>";
	echo "<td>". $namet2 ."</td>";	 // set up a row for each record
	echo "<td>". $row['name_competition']."</td>";
}


echo "</table>";

?>

	</div>
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
				<li class="address">Parque da Ponte, 4700, Braga , Portugal</li>
				<li class="phone">(253) 254-711</li>
				<li class="email"><a href="mailto:contact@companyname.com">Voleibol@braga.com</a></li>
			</ul><!-- end .contact-info -->
			
		</div><!-- end .three-fourth -->

		<div class="one-fourth last">

			<span class="title">Siga-nos no:</span>

			<ul class="social-links">
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="youtube"><a href="#">YouTube</a></li>
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