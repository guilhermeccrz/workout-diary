<?php 


include "config_db.php";

$grupo = $_POST["grupo"];
$tipo = $_POST["tipo"];
$nome = $_POST["nome"];
$seriesx = $_POST["seriesx"];
$seriesy = $_POST["seriesy"];
$peso1 = $_POST["peso1"];
$peso2 = $_POST["peso2"];
$peso3 = $_POST["peso3"];
$peso4 = $_POST["peso4"];


$sqlinsert = "INSERT INTO tb_treino (grupo, tipo, nome, seriesx, seriesy, peso1, peso2, peso3, peso4) VALUES ('$grupo','$tipo','$nome','$seriesx','$seriesy','$peso1','$peso2','$peso3','$peso4')";

mysql_query($sqlinsert) or die ("nao foi possivel");

echo "Usuário incluido com sucesso!";



?>