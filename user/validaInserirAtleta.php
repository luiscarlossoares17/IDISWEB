<html>
<body>
 
 
<?php
include("mysql.connect.php");


$sql="INSERT INTO athlete (id_athlete, name, birth_date, address, height, weight, email, photo, phone_number, gender, active, description, niss, num_cc, num_health, user, pass, blood_type, nib, team, jersey_number)
VALUES
('', '$_POST[nome3]','$_POST[data3]','$_POST[morada3]','$_POST[altura3]','$_POST[peso3]','$_POST[email3]','$_POST[foto3]','$_POST[telefone3]','$_POST[genero3]','$_POST[ative3]','$_POST[descricao3]','$_POST[niss3]','$_POST[cc3]','$_POST[health3]','$_POST[user3]','$_POST[pass3]','$_POST[blood3]','$_POST[nib3]','$_POST[team3]','$_POST[jersey3]')";
 
if (!mysql_query($sql))
  {
  die('Ocorreu um erro durante a criação do registo: ' . mysql_error());
  }
echo "O seu registo foi criado com sucesso, obrigado!";
 

?>
<meta http-equiv="refresh" content="2;URL='registoatletas.php'" />
</body>
</html>
 