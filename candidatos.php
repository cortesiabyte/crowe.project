<?php
//INFO BD
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "crowe";

//conexão com o MySQL
$conn = new mysqli($server,$user,$pass,$bdname);

//verificação com o BD
$comando = "SELECT * from rh";

$resultado = $conn->query($comando);
if ($resultado->num_rows > 0){
	while($linha = $resultado->fetch_assoc()) {
		echo "<br>",$linha['id']," - ",$linha['nome'];
	}
	echo "<br><br><a href='load_index.html'><button>Voltar</button></a>"; 
}else{
	echo "Nenhum candidato encontrado.";
}
$conn->close();
?>