<?php
require_once '../funcoes.php';
//session_start();
$ligacao=ligar_base_dados();
$cod = $_SESSION['username'];
echo $cod;
			$aut="SELECT * FROM player WHERE user='$cod'";
			$resultado = mysql_query($aut,$ligacao);
			$row = mysql_fetch_assoc($resultado);
			$nome = $row["name"];
			echo $nome;
?>