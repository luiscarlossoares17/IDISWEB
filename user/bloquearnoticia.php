<?php

include("mysql.connect.php");

$_GET["id"];
$noticia = $_GET["id"];

$sql = "UPDATE news SET active='0' WHERE id='$noticia'";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante o bloqueio: ' . mysql_error());
  }?>
<script>
            alert("Bloqueada com sucesso!");
			window.location='noticias.php';
        </script>
 