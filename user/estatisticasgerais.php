<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<?php
require_once '../funcoes.php';
$ligacao=ligar_base_dados();
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
	
	<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
    vertical-align:middle;
	padding: 8px;
	background-color: #ffffff;
}

table.gridtableb {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtableb th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtableb td {
	text-align:center; 
    vertical-align:middle;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>
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

	<h2 class="slogan align-center"> Atletas do S.C. Braga Voleibol </h2>
	
<center>
<!-- Todas as Atletas  -->
	<table class="gridtableb" align="center">
<th> Nome </th>    
<th> D.N. </th>
<th> Morada </th>
<th> Mail </th>
<th> Contacto </th>

<tr>
<?php
$autb = "SELECT * FROM athlete";
$resultado = mysql_query($autb,$ligacao);
While ($registo = mysql_fetch_array($resultado)){
$nome= $registo["name"]; 
$dn = $registo ["birth_date"];
$morada = $registo ["address"];
$email = $registo ["email"];
$telefone = $registo ["phone_number"];

echo "<td>";
echo "$nome";
echo "</td>";

echo "<td>";
echo "$dn";
echo "</td>";

echo "<td>";
echo "$morada";
echo "</td>";

echo "<td>";
echo "$email";
echo "</td>";

echo "<td>";
echo "$telefone";
echo "</td>";

echo"</tr>";
}
?></tr></table>
<?php
//Quantidade de Jogadoras
			$aut="SELECT COUNT(*) AS quanto FROM athlete";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$qtdjogadoras = $row["quanto"];
			//echo "Jogadoras Registadas ".$qtdjogadoras;
//Quantidade de Jogos
			$aut="SELECT COUNT(*) AS quanto FROM competition";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$qtdjogos = $row["quanto"];
			//echo "Jogos Realizados ".$qtdjogos;	
//Lesoes de Jogadoras
			$aut="SELECT COUNT(*) AS quanto FROM injury";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$qtdlesoes = $row["quanto"];
			//echo "Lesões ".$qtdlesoes;
//Treinos Realizados
			$aut="SELECT COUNT(*) AS quanto FROM training";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$qtdtreinos = $row["quanto"];
			//echo "Treinos realizados ".$qtdtreinos;				
?>
<table class="gridtableb" align="center">
	<tr>
  <td><b>Jogadoras Registadas</b></td>
  <td><?php echo $qtdjogadoras; ?></td>		
</tr>
<tr>
  <td><b>Jogos Realizados</b></td>
  <td><?php echo $qtdjogos; ?></td>		
</tr>
<tr>
  <td><b>Treinos Realizados</b></td>
  <td><?php echo $qtdtreinos; ?></td>		
</tr>
<tr>
  <td><b>Lesões de Jogadoras</b></td>
  <td><?php echo $qtdlesoes; ?></td>		
</tr>
</table>
</center>
<!-- FIM NOTAS  -->
	
</section><!-- end #content -->

<footer id="footer" class="clearfix">

	<div class="container">

		<div class="three-fourth">

			<nav id="footer-nav" class="clearfix">

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="elements.php">Features</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="portfolio-4-columns.php">Portfolio</a></li>
					<li><a href="contact-us.php">Contact</a></li>
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
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="digg"><a href="#">Digg</a></li>
				<li class="vimeo"><a href="#">Vimeo</a></li>
				<li class="youtube"><a href="#">YouTube</a></li>
				<li class="skype"><a href="#">Skype</a></li>
			</ul><!-- end .social-links -->

		</div><!-- end .one-fourth.last -->
		
	</div><!-- end .container -->

</footer><!-- end #footer -->

<footer id="footer-bottom" class="clearfix">

	<div class="container">

		<ul>
			<li>IDIS &copy; 2014</li>
			<li><a href="#">Informacoes Legais</a></li>
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