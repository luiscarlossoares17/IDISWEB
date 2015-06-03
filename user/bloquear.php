<?php

include("mysql.connect.php");

$_GET["name"];
$pessoa = $_GET["name"];

$sql = "UPDATE athlete SET active='0' WHERE name='$pessoa'";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante o bloqueio: ' . mysql_error());
  }?>
<script>
            alert("Bloqueado com sucesso!");
			window.location='listarjogadores.php';
        </script>
 