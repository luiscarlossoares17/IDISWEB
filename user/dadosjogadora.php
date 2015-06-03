<!DOCTYPE html>
<?php 
	require_once '../funcoes.php';
	$ligacao=ligar_base_dados();
	//Receber ID da Jogadora
		  	$variavel = $_GET['varname'];			
	//Obter o nome da Jogadora
		  $jog="SELECT * FROM athlete WHERE id_athlete='$variavel'";
		  $resultado = mysql_query($jog,$ligacao);
		  $registo = mysql_fetch_assoc($resultado);
		  $id = $registo["id_athlete"];
		  $nome = $registo["name"];
		  $user = $registo["user"]; 
		  $pass = $registo ["pass"];
		  $birth = $registo ["birth_date"];
		  $address = $registo ["address"];
		  $height = $registo ["height"];
		  $weight = $registo ["weight"];
		  $email = $registo ["email"];
		  $photo = $registo ["photo"];
		  $telefone = $registo ["phone_number"];
		  $gender = $registo ["gender"];
		  $niss = $registo ["niss"];
		  $cc = $registo ["num_cc"];
		  $health = $registo ["num_health"];
		  $blood = $registo ["blood_type"];	  
		  $status = $registo ["active"];
		  
?>
<head>
		<meta charset="utf-8">
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
couple teen
hot babe sucks
hot sce in sco
nikki
over the fence

</style>
</head>

<body>
<b><?php echo $nome?></b><hr>

  
	<table class="gridtable" align="center">
	<tr>
		<td><img src="../img/equipasenior/<?php echo "$id" ?>.png" alt=""></td>
		<td>
			<br>Data de Nascimento: <?php echo $birth; ?>
			<br>Morada:<?php echo $address; ?>
			<br>Altura:<?php echo $height; ?>
			<br>Peso:<?php echo $weight; ?>
		</td>
		<td> 
			<br>Contacto:<?php echo $telefone; ?>
			<br>Email:<?php echo $email; ?>
			<br>Grupo Sanguineo:<?php echo $blood; ?>
			<br>Estado:<?php echo $status;?>
			<br>
			<br>
			<br>
			<a href='alteraratletas2.php?varname=<?php echo $nome ?>'>Editar dados</a>
			<br>
			<br>
		<!--	<?php if($status == '1'){
   echo "<a href='bloquear2.php?varname=<?php echo $nome ?>'>Bloquear</a>";	 // set up a row for each record
    }else{
	echo "<a href='desbloquear2.php?varname=<?php echo $nome ?>'>Desbloquear</a>";	 // set up a row for each record
}?>-->
			
		</td>
		
	</tr>
	</table>
	
	<br>Histórico de Clubes<hr>
	<!-- Historico de Clubes -->
	<table class="gridtableb" align="center">
<th> Chegada </th>    
<th> Saida </th>
<th> Clube </th>
<tr>
<?php
$autb = "SELECT * FROM history WHERE athlete='$variavel'";
$resultado = mysql_query($autb,$ligacao);
While ($registo = mysql_fetch_array($resultado)){
$chegada=$registo["date_in"];    
$saida=$registo["date_out"];
$clube=$registo["previousClub"];

echo "<td>";
echo "$chegada";
echo "</td>";

echo "<td>";
echo "$saida";
echo "</td>";

echo "<td>";
echo "$clube";
echo "</td>";

echo"</tr>";
}
?></tr></table>
Lesões
<hr>
<!-- Lesões -->
	<table class="gridtableb" align="center">
<th> Data da Lesão </th>    
<th> Descrição </th>
<th> Tratamento </th>
<th> Recuperação </th>
<tr>
<?php
$autb = "SELECT * FROM injury WHERE athlete='$variavel'";
$resultado = mysql_query($autb,$ligacao);
While ($registo = mysql_fetch_array($resultado)){
$data=$registo["date_injury"];    
$desc=$registo["description"];
$tratamento=$registo["treatment"];
$recuperacao=$registo["date_end"];

echo "<td>";
echo "$data";
echo "</td>";

echo "<td>";
echo "$desc";
echo "</td>";

echo "<td>";
echo "$tratamento";
echo "</td>";

echo "<td>";
echo "$recuperacao";
echo "</td>";

echo"</tr>";
}
?></tr></table>	
</body>

</html>