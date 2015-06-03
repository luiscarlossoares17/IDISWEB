<html>
<body>
 
 
<?php

include("mysql.connect.php");

$id = $_POST["id3"];

$sql = "UPDATE news SET title='$_POST[title3]', date='$_POST[date3]', content='$_POST[content3]' WHERE id = $id";

 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante a criacao do registo: ' . mysql_error());
  }?>
<script>
            alert("Alterada com sucesso!");
			window.location='noticias.php';
        </script>
</body>
</html>
 