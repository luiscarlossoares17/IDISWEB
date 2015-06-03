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

	<header class="page-header">
	
		<h1 class="page-title">Área de Alteração de dados:</h1>
			<p>Aqui podera atualizar os seus dados pessoais! <p>
	</header><!-- end .page-header -->
	
	<section id="main" >
	<?php
// Inclui arquivo de conexão
include("mysql.connect.php");
$utilizador = $_SESSION['username'];
// Se for uma requisição POST, faz a ação de salvar as informações
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    
    $Morada2 = $_POST['Morada'];
    $Altura2 = $_POST['Altura'];
	$Peso2 = $_POST['Peso'];
    $Email2 = $_POST['Email'];
	$Foto2 = $_POST['Foto'];
	$Telefone2 = $_POST['Telefone'];
	$camisola2 = $_POST['camisola'];

	
	
    $sqlinsert = "UPDATE athlete SET  address='{$Morada2}',jersey_number='{$camisola2}', height='{$Altura2}', weight='{$Peso2}', email='{$Email2}', photo='{$Foto2}', phone_number='{$Telefone2}' WHERE user = '$utilizador' ";
    mysql_query($sqlinsert) or die(mysql_error());
    ?>

    <br/>
    <script>
            alert("Alterado com sucesso!");
			window.location='principal.php';
        </script>

    <?php
	
} 
else // Se não for uma requisição POST, mostra o formulário
{
   /* $id = $_GET['idNumber'];*/
   
    $sql = mysql_query("SELECT * FROM athlete WHERE user = '$utilizador'");
		if($sql === FALSE) {
			die(mysql_error()); // TODO: better error handling
		}
    // Verifica se recebeu ao menos um resultado (o que se espera)
    if($exibe = mysql_fetch_array($sql))
    {
        // Se recebeu, faz a leitura dos dados
      
       
		$Morada = $exibe['address'];
		$Altura = $exibe['height'];
		$Peso = $exibe['weight'];
		$Email = $exibe['email'];
		$Foto = $exibe['photo'];
		$Telefone = $exibe['phone_number'];
		$Jersey = $exibe['jersey_number'];

		

        // Imprime formulário pré carregado
        ?>
        <form action="altdadosatleta.php" method="POST">
				<div class="form_settings">
		    <br><span>Morada:<input type="block" name="Morada" value="<?php echo $Morada; ?>">
           	<br><span>Altura:<input type="float" name="Altura" value="<?php echo $Altura; ?>">
			<br><span>Peso:<input type="float" name="Peso" value="<?php echo $Peso; ?>">
			<br><span>Email:<input type="text" name="Email" value="<?php echo $Email; ?>">
			<br><span>Fotografia:<input type="text" name="Foto" value="<?php echo $Foto; ?>">
			<br><span>Telefone:<input type="integer" name="Telefone" value="<?php echo $Telefone; ?>">
			<br><span>Numero Camisola:<input type="integer" name="camisola" value="<?php echo $Jersey; ?>">
            <input type="submit" value="Guardar">
			</div>
        </form>
        <?php
    }
    else // ID inválido
    {
        // Imprime alerta em javascript
        ?>
		<script>
            alert("Não tem permissões para aceder a esta página!");
        </script>
        <?php
    }
}
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