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
$comando = "SELECT * from rh where id = $id";

$resultado = $conn->query($comando);
if ($resultado->num_rows > 0){
	while($linha = $resultado->fetch_assoc()) {
		echo "<br><br>ID:",$linha['id'],"<br>Nome: ",$linha['nome'],"<br>Idade: ",$linha['idade'],"<br>Data de nascimento: ",$linha['nascimento'],"<br>Logradouro: ",$linha['logradouro'],"<br>Número: ",$linha['numero'],"<br>Complemento: ",$linha['complemento'],"<br>Cidade: ",$linha['cidade'],"<br>Estado: ",$linha['estado'],"<br>CEP: ",$linha['cep'],"<br>E-mail: ",$linha['email'],"<br>Resumo da Entrevista: ",$linha['resumo'];
	}
	echo "<br><br><a href='load_index.html'><button>Voltar</button></a>"; 
}else{
	echo "Nenhuma informação encontrada.";
}
$conn->close();
?>