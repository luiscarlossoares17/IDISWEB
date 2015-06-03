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
</style>
</head>

<body>
	<!-- Formulario Para nova Nota -->
	<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data">
                Disciplina: <input type="text" name="fdisciplina" size="10" maxlength="45" />
				Nota: <input type="text" name="fnota" size="3" maxlength="45" />
				Ano: <input type="text" name="fano" size="5" maxlength="45" />
				Periodo: <input type="text" name="fperiodo" size="3" maxlength="45" />
				Categoria: <input type="text" name="fcategoria" size="3" maxlength="45" />
		<input type="submit" name="novo" value="&nbsp;Registar&nbsp;"/>
</form>	
<br>
	<!-- FIM Formulario -->


	<br>Histórico de Todas as Notas<hr>
	<!-- Historico de Clubes -->
	<table class="gridtableb" align="center">
<th> Disciplina </th>    
<th> Nota </th>
<th> Classe </th>
<th> Ano </th>
<th> Periodo </th>
<tr>
<?php
$autb = "SELECT * FROM academic_path WHERE id_athlete='$variavel'";
$resultado = mysql_query($autb,$ligacao);
While ($registo = mysql_fetch_array($resultado)){
$disciplina=$registo["course"];    
$nota=$registo["classification"];
$classe=$registo["category"];
$ano=$registo["year"];
$periodo=$registo["semester"];

echo "<td>";
echo "$disciplina";
echo "</td>";

echo "<td>";
echo "$nota";
echo "</td>";

echo "<td>";
echo "$classe";
echo "</td>";

echo "<td>";
echo "$ano";
echo "</td>";

echo "<td>";
echo "$periodo";
echo "</td>";

echo"</tr>";
}
?></tr></table>
<hr>

</body>

</html>