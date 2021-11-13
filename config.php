<?php
$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbname = "bdbolao";
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
if ($conn) {
	echo "Conexão ok";
}else{
	echo "conexão com banco falhou";
}

?>