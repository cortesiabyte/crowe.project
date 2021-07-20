<?php
//dados do HTML
$id = $_POST['id'];

//INFO BD
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "crowe";

//conexão com o MySQL
$conn = new mysqli($server,$user,$pass,$bdname);

//verificação com o BD
if ($conn->connect_error) {
	echo "
		<html>
		<script>
		window.alert('Error! Algo não está certo, falha na verificação com o banco de dados.');
		</script>
		</html>
	";
}else{
	echo "
		<html>
		<script>
		window.alert('Canditado deletado com sucesso!!');
		</script>
		</html>
	";

$deletar = "DELETE from rh where id = $id";



if ($conn->query($deletar)==True) {
	echo "<br><h4><font color='green' align='center'>Candidato deletado com Sucesso!</font></h4><br>
	<a href='load_index.html'><button>Voltar</button></a>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao Deletar!</font></h1></br>";
	}

}

$conn->close();
?>