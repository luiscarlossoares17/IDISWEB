<!DOCTYPE html>
<html
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

	
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if !lte IE 6]><!-->
	<link rel="stylesheet" href="css/style.css" media="screen" />

		
	
</head>
<body>



<section id="content" class="container clearfix">


	<section id="main" >
	<?php
// Inclui arquivo de conexão
include("mysql.connect.php");



$variavel = $_GET['varname'];


$expressao = "SELECT * FROM athlete WHERE name = '$variavel'  ";
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
		$school2 = $registo["school_year"];
		
		


										
       } ?>
	     <form action="validaralteracao.php" method ="POST"> 
			<div class="form_settings">
			<br><span>ID<input readonly type="text" name="id3" value="<?php echo $idplayer2; ?>">
			<br><span>Password:<input type="text" name="pass3" value="<?php echo $pass2; ?>">
			<br><span>Morada:<input type="text" name="morada3" value="<?php echo $address2; ?>">
			<br><span>Altura:<input type="float" name="altura3" value="<?php echo $height2; ?>">
			<br><span>Peso:<input type="float" name="peso3" value="<?php echo $weight2; ?>">
			<br><span>Email:<input type="text" name="email3" value="<?php echo $email2; ?>">
			<br><span>Telefone:<input readonly type="integer" name="telefone3" value="<?php echo $phone_number2; ?>">
			<br><span>Tamanho Camisola:<input readonly type="text" name="jersey3" value="<?php echo $jersey2; ?>">
			<br><span>Numero Bancario:<input readonly type="integer" name="nib3" value="<?php echo $nib2; ?>">
		    <br><span>Ano Escolar:<input readonly type="text" name="school3" value="<?php echo $school2; ?>">
			<br>
			<br>
			<input type="submit" value="Guardar">

		</div>

		</form>
	   
	</section><!-- end #main -->


</section><!-- end #content -->

<!--<![endif]-->
</body>

</html>