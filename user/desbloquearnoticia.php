<?php

include("mysql.connect.php");

$_GET["id"];
$noticia = $_GET["id"];

$sql = "UPDATE news SET active='1' WHERE id='$noticia'";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante o desbloqueio: ' . mysql_error());
  }?>
<script>
            alert("Desbloqueado com sucesso!");
			window.location='noticias.php';
        </script>
 