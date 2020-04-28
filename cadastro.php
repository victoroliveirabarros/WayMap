<?php
session_start();
include_once("conexao.php");

?>
<!DOCTYPE html>
  <head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
		
		<title>ADSUMUS</title>
	</head>
	<body>
	
		<?php
		/*if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		if(isset($_SESSION['msg2'])){
			echo $_SESSION['msg2'];
			unset($_SESSION['msg2']);
		}*/
		?>
	
		<h3>Adsumus Teste</h3>
		<form method="GET" action="processa_cad.php">
			<label>Nome: </label>
			<input type="text" name="name" placeholder="Nome da Empresa ou Filial"><br><br>
			
			<label>Endereço: </label>
			<input type="text" name="address" placeholder="Digite o número e o Logradouro"><br><br>
			
			<label>Latitude: </label>
			<input type="text" name="lat" placeholder="Digite a latitude"><br><br>
			
			<label>Longitude: </label>
			<input type="text" name="lng" placeholder="Digite a Longitude"><br><br>		
			
			<label>Tipo da Empresa: </label>
			<input type="text" name="type" placeholder="Educação, Restaurante..."><br><br>

			<input type="submit" value="Cadastrar" class="btn btn-success"><br><br>
			</form>
			
			<form method="POST" action="valida.php">
			<label>Login: </label>
			<input type="text" name="login" placeholder="Crie o seu Login"><br><br>		
			
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Crie a sua senha"><br><br>
		
			<input type="submit" value="Cadastrar" class="btn btn-success"><br><br>
			</form>
			
			<a href="home.php">Voltar a home</a>
	</body>
</html>