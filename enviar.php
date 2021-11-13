<?php include_once"config.php";?>
<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$contato = $_POST['contato'];
$pix = $_POST['pix'];
$time1 = $_POST['time1'];
$time2 = $_POST['time2'];

$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_set_charset($conn,"utf8");

$sql = "insert into tbbolao(
nome,cpf,endereco,contato,pix,time1,time2)values('$nome','$cpf','$endereco','$contato','$pix','$time1','$time2')";
if (mysqli_query($conn,$sql)){
	header("location: index.php");
}else{
	echo "Deu Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>