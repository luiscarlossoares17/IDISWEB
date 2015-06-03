<?php

include("mysql.connect.php");

$_GET["name"];
$pessoa = $_GET["name"];

$sql = "UPDATE athlete SET active='1' WHERE name='$pessoa'";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante o desbloqueio: ' . mysql_error());
  }?>
<script>
            alert("Desbloqueado com sucesso!");
			window.location='listarjogadores.php';
        </script>
 