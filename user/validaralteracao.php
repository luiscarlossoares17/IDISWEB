<html>
<body>
 
 
<?php

include("mysql.connect.php");

$id = $_POST["id3"];

$sql = "UPDATE athlete SET pass='$_POST[pass3]', address='$_POST[morada3]', height='$_POST[altura3]', weight='$_POST[peso3]', email='$_POST[email3]', jersey_number='$_POST[jersey3]', school_year='$_POST[school3]',phone_number='$_POST[telefone3]', nib='$_POST[nib3]' WHERE id_athlete = $id";

 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante a criacao do registo: ' . mysql_error());
  }?>
<script>
            alert("Alterado com sucesso!");
			
        </script>
</body>
</html>
 