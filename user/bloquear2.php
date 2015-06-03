<?php

include("mysql.connect.php");

$variavel = $_GET['varname'];

$sql = "UPDATE athlete SET active='0' WHERE name='$variavel'";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante o bloqueio: ' . mysql_error());
  }?>
<script>

            alert("Bloqueado com sucesso!");
				window.location("adminjogadoras.php");
        </script>
 