<html>
<body>
 
 
<?php
include("mysql.connect.php");


$sql="INSERT INTO news (title, date, content)
VALUES
('$_POST[title]','$_POST[date]','$_POST[content]')";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante a criação da noticia: ' . mysql_error());
  }
echo "A sua noticia foi criada com sucesso, obrigado!";
 


?>
<meta http-equiv="refresh" content="2;URL='noticias.php'" />
</body>
</html>
 