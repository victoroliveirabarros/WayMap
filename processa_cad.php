<?php
session_start();
ob_start();
include_once("conexao.php");

//Receber os dados do formulário
$dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);

//Salvar os dados no bd
$result_markers = "INSERT INTO markers(name, address, lat, lng, type) 
				VALUES 
				('".$dados['name']."', '".$dados['address']."', '".$dados['lat']."', '".$dados['lng']."', '".$dados['type']."')";

$resultado_markers = mysqli_query($conn, $result_markers);
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = '<div class="alert alert-info";>Endereço cadastrado com sucesso!</div>';
	header("Location: cadastro.php");
}else{
	$_SESSION['msg'] = "<span style='color: red';>Erro: Endereço não foi cadastrado com sucesso!</span>";
	header("Location: cadastro.php");	
}
/*$result_cad = "INSERT INTO acesso(login, senha, confsen) 
				VALUES 
				('".$dados['login']."', '".$dados['senha']."', '".$dados['confsen']."')";
	
if($dados['senha'] == $dados['confsen'])
{	
if(mysqli_insert_id($conn)){
	$_SESSION['msg2'] = '<div class="alert alert-info";>Login cadastrado com sucesso!</div>';
	header("Location: cadastro.php");
}
}
else
{
	$_SESSION['msg2'] = "<span style='color: red';>Erro: Login não cadastrado com sucesso!</span>";
	header("Location: cadastro.php");
}*/