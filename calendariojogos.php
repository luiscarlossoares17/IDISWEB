<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<?php
session_start();
include ("mysql.connect.php");

?>


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script> 
	function goLastMonth(month, year){
		if(month == 1){
			--year;
			month = 13;
		}
		--month
		var monthstring = ""+month+"";
		var monthlength = monthstring.length;
		if(monthlength <= 1){
			monthstring = "0"+monthstring;
		}
		document.location.href="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
	}
	function goNextMonth(month, year){
		if(month == 12){
		++year;
		month = 0;
		}
		++month
		var monthstring = ""+month+"";
		var monthlength = monthstring.length;
		if(monthlength <= 1){
			monthstring = "0"+monthstring;
		}
		document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
	}
	</script>
	<style>
		.today{
			background-color : #CAE1FF;
		}
		
		.event {
			background-color : #008B00; 
		}
		
		
	</style>
	
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

	<a href="index.php" id="logo">
		<img src="img/logo4.png" alt="SmartStart">
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
							<li><a href="plantelcadetes.php">Plantel</a></li>
							<li><a href="ResultCadetes.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Juvenis</a>
						<ul>
							<li><a href="planteljuvenis.php">Plantel</a></li>
							<li><a href="ResultJuvenis.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Juniores</a>
						<ul>
							<li><a href="planteljuniores.php">Plantel</a></li>
							<li><a href="ResultJuniores.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Séniores</a>
						<ul>
							<li><a href="plantelseniores.php">Plantel</a></li>
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
				<a href="#" data-description="sobre o braga voleibol">O Clube</a>
				<ul>
					<li><a href="origem.php">Origem</a></li>
					<li><a href="quadrohonra.php">Quadro de Honra</a></li>
				</ul>
			</li>
			<li>
				<a href="contactos.php" data-description="Fale Conosco">Contactos</a>
			</li>
			<li>
				<a href="#" data-description="area pessoal">Entrar</a>
				<ul>
				<fieldset id="body">
                <form action="login.php" method="post">
                                <br>
                               
            Utilizador:<input id="user" type="text" name="username">
            <br>
            Password:<input type="password" name="password">
			<br>
			<br>
			<input class="submit" type="submit" name="name" value="Login" />
			</form>
			<br>
			<form action="recuperarpass.php" method="post">
                          
			<input class="submit" type="submit" name="name" value="Recuperar Password" />
			</form>
            
                        </fieldset>         
						

						</ul>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

	<header class="page-header">

	</header><!-- end .page-header -->
	
	<section id="main" >
	
		<?php
		if(isset($_GET['day'])){
		$day = $_GET['day'];
		}else{
		$day = date("j");
		}
		if(isset($_GET['month'])){
		$month = $_GET['month'];
		}else{
		$month = date("n");
		}
		if(isset($_GET['year'])){
		$year = $_GET['year'];
		}else{
		$year = date("Y");
		}
		
		
		//calendar Variable
		$currentTimeStamp = strtotime("$year-$month-$day");
		$monthName = date("F",$currentTimeStamp);
		$numDays = date("t",$currentTimeStamp);
		$counter = 0;
		?>
		<?php
		//o codigo deve estar por baixo das variaveis com a data
		if(isset($_GET['add'])){
			$title = $_POST['txttitle'];
			$detail = $_POST['txtdetail'];
			 $eventdate = $day."/".$month."/".$year;
			$sqlinsert = "insert into eventcalendar (Title,Detail,eventDate,dateAdded) values ('".$title."','".$detail."','".$eventdate."',now())";
			$resultinsert = mysql_query($sqlinsert);
				if($resultinsert){
					echo "Evento Adicionado com sucesso!";
				}else{
					echo "Ocorreu um erro ao adicionar evento!";
				}
	}
		?>
		
		<h2 class="slogan align-center"> Calendário de Jogos </h2>	
		<center><table border='1' width='70%' align='center' cellpadding=”0″>
			<tr>
				<td><input style='width:50px;' type='button' value='<' name='previousbutton' onclick="goLastMonth(<?php echo $month.",".$year?>)"></td>
				<td colspan='5' align='center'><?php echo $monthName.",".$year; ?></td>
				<td><input style='width:50px;' type='button' value='>' name='nextbutton' onclick="goNextMonth(<?php echo $month.",".$year?>)"></td>
			</tr>
			<tr>
				<td width='50px'>Dom</td>
				<td width='50px'>Seg</td>
				<td width='50px'>Ter</td>
				<td width='50px'>Qua</td>
				<td width='50px'>Qui</td>
				<td width='50px'>Sex</td>
				<td width='50px'>Sab</td>
			</tr>
			<?php
							echo "<tr>";
				
				for($i = 1; $i < $numDays+1 ; $i++, $counter++){
					$timeStamp = strtotime("$year-$month-$i");
					if($i == 1){
						$firstDay = date("w",$timeStamp);
						for($j = 0; $j < $firstDay; $j++, $counter++){
						//blank space
						echo "<td>&nbsp;</td>";
						}
					}
				if($counter % 7 == 0){
					echo "</tr><tr>";
					}
					
				
				$monthstring = $month;
				$monthlength = strlen($monthstring);
				
				$daystring = $i;
				$daylength = strlen($daystring);
				if($monthlength <= 1){
					$monthstring = "0".$monthstring;
				}
				if($daylength <= 1){
					$daystring = "0".$daystring;
				}
				
				$todaysDate = date("d/m/Y");
				$dateToCompare = $daystring."/".$monthstring."/".$year;
				$dateToCompare2 = $year."/".$monthstring."/".$daystring;
				echo "<td align='center' ";
				if ($todaysDate == $dateToCompare){
					echo "class='today'";
				}else{
					$sqlCount = "select * from competition where date='".$dateToCompare2."'";
					$noOfEvent = mysql_num_rows(mysql_query($sqlCount));
					if($noOfEvent >= 1){
						echo "class='event'";
					}
				}
			
				
				echo"><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";
				}
				echo "</tr>";
				
			
				
			?>
			</table></center>
	<?php
			
			// O Seguinte codigo premite adicionar um botão para criar um novo evento no calendário!! // 
			//if(isset($_GET['v'])){
			//echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Event</a>";
			//if(isset($_GET['f'])){
			//		include("eventform.php");
			//}
			
			
			$sqlEvent = "select * from competition where date='".$year."/".$month."/".$day."'";
			$resultEvents = mysql_query($sqlEvent);
			echo "<hr>";
			while($events = mysql_fetch_array($resultEvents)){
			$team1 = $events['id_team1']; 
            $team2 = $events['id_team2'];
				
				$expressao = "SELECT * FROM team WHERE id_team = '$team1' ";
					$resultado = mysql_query($expressao);
				    while ($registo = mysql_fetch_array($resultado)){ 
					$namet1 = $registo["name"]; }
					
				$exp = "SELECT * from team WHERE id_team = '$team2'";
	               $res = mysql_query($exp);
		           while ($reg = mysql_fetch_array($res)){
				   $namet2 = $reg["name"];}
				
				
				echo "Abaixo seguem os detalhes do evento do dia &nbsp;".$events['date'];
				echo "<br>";
				echo "<br><b>Nome da Competição:</b> " .$events['name_competition']."<br>";
				echo "<br>"; 	
				echo "<br><b>Equipas:</b> " .$namet1." "."<b>VS</b>"." ".$namet2;

			}
			//}
		?>
		
			
		
		
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