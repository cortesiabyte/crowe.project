<?php
//dados do HTML
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$nascimento = $_POST['nascimento'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
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
		window.alert('Informações atualizadas com sucesso!!');
		</script>
		</html>
	";

$atualizar = "UPDATE rh set nome = '$nome',idade = '$idade',nascimento = '$nascimento',logradouro = '$logradouro',numero = '$numero',complemento = '$complemento',cidade = '$cidade',estado = '$estado',cep = '$cep',email = '$email' where id = $id";


if ($conn->query($atualizar)==True) {
	echo "<br><h4><font color='green' align='center'>Dados atualizado com Sucesso!</font></h4><br>
	<a href='load_index.html'><button>Voltar</button></a>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao atualizar!</font></h1></br>";
	}
}
$conn->close();
?>