<?php
//Variaveis
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
$resumo = $_POST['resumo'];

//INFO BD
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "crowe";

//conexão com o MySQL
$conn = new mysqli($server,$user,$pass,$bdname);

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
		window.alert('Formulário enviado com sucesso!!');
		</script>
		</html>
	";

$cadastros = "INSERT INTO rh (nome,idade,nascimento,logradouro,numero,complemento,cidade,estado,cep,email,resumo) VALUES ('$nome','$idade','$nascimento','$logradouro','$numero','$complemento','$cidade','$estado','$cep','$email','$resumo')";


if ($conn->query($cadastros)==True) {
	echo "<br><h4><font color='green' align='center'>Cadastrado com Sucesso!</font></h4><br>
	<p>Retornaremos um e-mail com as devidas instruções, caso você seja aprovado para a próxima etapa. <br> Agradeçemos sua participação, até logo!</p><br>
	<a href='load_index.html'><button>Voltar</button></a>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao cadastrar! Contate um administrador.</font></h1></br>";
	}

}

$conn->close();
?>