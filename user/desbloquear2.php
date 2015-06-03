<?php

include("mysql.connect.php");

$variavel = $_GET['varname'];

$sql = "UPDATE athlete SET active='1' WHERE name='$variavel'";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante o desbloqueio: ' . mysql_error());
  }?>
<script>
            alert("Desbloqueado com sucesso!");
			window.location("adminjogadoras.php");
        </script>
 