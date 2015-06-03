<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<?php
require_once '../funcoes.php';
$ligacao=ligar_base_dados();
$username = $_SESSION['username'];
$aut="SELECT * FROM athlete WHERE user='$username'";
$resultado = mysql_query($aut,$ligacao);
$row = mysql_fetch_assoc($resultado);
$nome = $row["name"];
$variavel = $row["id_athlete"];		
		//Querys dos Serviços
			$aut="SELECT COUNT(*) AS quanto FROM service WHERE id_service_type=5 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$valor5 = $row["quanto"];
		
			$aut="SELECT COUNT(*) AS quanto FROM service WHERE id_service_type=4 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$valor4 = $row["quanto"];
		
			$aut="SELECT COUNT(*) AS quanto FROM service WHERE id_service_type=3 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$valor3 = $row["quanto"];
		
			$aut="SELECT COUNT(*) AS quanto FROM service WHERE id_service_type=2 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$valor2 = $row["quanto"];
		
			$aut="SELECT COUNT(*) AS quanto FROM service WHERE id_service_type=1 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$valor1 = $row["quanto"];
		//Querys dos Blocos
			$aut="SELECT COUNT(*) AS quanto FROM block WHERE id_block_type=1 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$bloco1 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM block WHERE id_block_type=2 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$bloco2 = $row["quanto"];
		//Query dos Ataques
			$aut="SELECT COUNT(*) AS quanto FROM attack WHERE id_attack_type=1 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$ataque1 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM attack WHERE id_attack_type=2 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$ataque2 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM attack WHERE id_attack_type=3 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$ataque3 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM attack WHERE id_attack_type=4 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$ataque4 = $row["quanto"];
		//Querys das Defesas
			$aut="SELECT COUNT(*) AS quanto FROM defence WHERE id_defence_type=1 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$defesa1 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM defence WHERE id_defence_type=2 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$defesa2 = $row["quanto"];
		//Querys das Recepções
			$aut="SELECT COUNT(*) AS quanto FROM reception WHERE id_reception_type=1 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$rececao1 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM reception WHERE id_reception_type=2 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$rececao2 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM reception WHERE id_reception_type=3 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$rececao3 = $row["quanto"];
			
			$aut="SELECT COUNT(*) AS quanto FROM reception WHERE id_reception_type=4 AND id_athlete='$variavel'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$rececao4 = $row["quanto"];
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
	
	<!-- Script dos Graficos -->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        // Grafico Servicos
		var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Excelente',     <?php echo $valor5 ?> ],
          ['Muito Bom',      <?php echo $valor4 ?>],
          ['Normal',  <?php echo $valor3 ?>],
          ['Mau', <?php echo $valor2 ?>],
          ['Pessimo',    <?php echo $valor1 ?>]
        ]);
		// Grafico Blocos
		var data2 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Kill',     <?php echo $bloco1 ?> ],
          ['Count',    <?php echo $bloco2 ?>]
        ]);
		// Grafico Ataques
		var data3 = google.visualization.arrayToDataTable([
          ['Task', 'Valor'],
          ['Kill',     <?php echo $ataque1 ?> ],
          ['Cont',      <?php echo $ataque2 ?>],
          ['Erro',  <?php echo $ataque3 ?>],
          ['Bloco',    <?php echo $ataque4 ?>]
        ]);
		// Grafico Defesa
		var data4 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Defesa Um',     <?php echo $defesa1 ?> ],
          ['Defesa Dois',    <?php echo $defesa2 ?>]
        ]);
		// Grafico Reception
		var data5 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Falhou',     <?php echo $rececao1 ?> ],
          ['Mau Passe',    <?php echo $rececao2 ?>],
		  ['Boa RP',    <?php echo $rececao3 ?>],
		  ['Excelente RP',    <?php echo $rececao4 ?>]
        ]);
		

        var options = {
          title: 'Performance nos Serviços',
          pieHole: 0.4,
		  colors: ['#339933', '#70B870', '#E2F1E2', '#9EA99E', '#4F544F']
        };
		var options2 = {
          title: 'Performance nos Blocos',
          pieHole: 0.4,
		  colors: ['#339933', '#4F544F']
        };
		var options3 = {
          title: 'Performance nos Ataques',
        };
		var options4 = {
          title: 'Performance nas Defesas',
          pieHole: 0.4,
		  colors: ['#339933', '#4F544F']
        };
		var options5 = {
          title: 'Performance nas Receções',
          pieHole: 0.4,
		  colors: ['#339933', '#70B870', '#E2F1E2', '#4F544F']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
		var chart2 = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart2.draw(data2, options2);
		var chart3 = new google.visualization.BarChart(document.getElementById('barchart1'));
        chart3.draw(data3, options3);
		var chart4 = new google.visualization.PieChart(document.getElementById('donutchart4'));
        chart4.draw(data4, options4);
		var chart5 = new google.visualization.PieChart(document.getElementById('donutchart5'));
        chart5.draw(data5, options5);
      }
    </script>
	<!-- FIM Script dos Graficos -->
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
<h1 class="page-title">As tuas Estatisticas <?php echo $nome ?></h1>
<center>
<table style="width:800px">
<tr>
<td><div id="donutchart" style="width: 400px; height: 200px;"> </div></td>
<td><div id="donutchart2" style="width: 400px; height: 200px;"> </div></td>
</tr>
<tr>
<td><div id="donutchart4" style="width: 400px; height: 200px;"> </div></td>
<td><div id="barchart1" style="width: 400px; height: 200px;"> </div></td>
</tr>
</table>
<div id="donutchart5" style="width: 450px; height: 300px;"> </div>
</center>

	
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