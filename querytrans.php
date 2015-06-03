<table align="center">
<th> id payment </th>    
<th> id form </th>
<th> Data </th>
<th> Valor </th>
<tr>
<?php
$jogador = $_SESSION['jogador'];

$aut="SELECT * FROM payment WHERE id_registration_form IN (SELECT * FROM registration_form WHERE player='$jogador')";
$resultado = mysql_query($aut,$ligacao);
While ($registo = mysql_fetch_array($resultado)){
$ip=$registo["id_payment"];    
$ifo=$registo["id_registration_form"];
$data=$registo["date"];
$valor=$registo["value"];

echo "<td>";
echo "$ip";
echo "</td>";

echo "<td>";
echo "$ifo";
echo "</td>";

echo "<td>";
echo "$data";
echo "</td>";

echo "<td>";
echo "$valor";
echo "</td>";

echo"</tr>";
}
?></tr></table>