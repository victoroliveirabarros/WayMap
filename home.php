<?php
session_start();
//if(!empty($_SESSION['id'])){
include_once("conexao.php");

//get 
if(!(isset($_GET{'search'})))
	$search = "";
else {
	$search = $_GET{'search'};
	//echo $search;
}

if(!(isset($_GET{'nomer'})))
	$nomer = "";
else {
	$nomer = $_GET{'nomer'};
	//echo $nomer;
}

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
		<h3>Adsumus Teste</h3>


			<div class="form-group">
			<select name="search" id="search">
				<option value="" disabled selected> Selecione uma OPÇÃO</option>
				<option value="cadastro"> Cadastro </option>
			</select>
			<button type="submit" class="btn btn-success"> Consultar</button>
			</div>
			
			<div class ="form-group">
			
			</div>
			
			<div class="form-group">
			<a href="cadastro.php" type="submit" class="btn btn-danger">NOVO CADASTRO</a>
			<form method="GET" action="home.php">
			</div>
			
		</div>

		<table class="table table-striped" id="tblGrid" style="width:100%">
		    <thead id="tblHead">
		      <tr>
				<th>ID</th>
				
				<th>NOME</th>
				
				<th>ENDERECO</th>
				
				<th>LATITUDE</th>
				
				<th>LONGITUDE</th>
				
				<th>TIPO</th>
				
				<th><a href="index.php">Ver Mapa </a></th>
		      </tr>
			  </thead>
		    	
<?php
//consulta no banco
if($search != "")
{
	
			$sql = "SELECT
						id,
						name
						address,
						lat,
						lng,
						type
					FROM
						markers";
				
		$res = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_array($res))
		{
			echo '<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['name'].'</td>
				<td>'.$row['address'].'</td>
				<td>'.$row['lat'].'</td>
				<td>'.$row['lng'].'</td>
				<td>'.$row['type'].'</td>
				<td><button type="submit" name="nomer" id="nomer" value="'.$row['id'].'" class="btn btn-danger">Excluir</button></td>
				</tr>';
		}	

		//echo $row['name'];

//<td><button type="submit" onclick="DELETE FROM cadastro WHERE id='.$nomer.'" class="btn btn-danger">Apagar</button></td>		
//<img src="lixeira.png" width="20" height="20"/><input type="text" name="nomer" id="nomer"><input type="submit" value="Excluir"></td>
}
if($nomer != "")
{
	$sql_erase = "DELETE FROM markers WHERE id = '".$nomer."'";
	
	//echo $sql_erase;

		if (!mysqli_query($conn, $sql_erase))
		{
		 echo mysqli_error($conn);
		}		
	
}

?>	
	</thead>				
	</table>
	</form>
</body>
</html>
<?php
/*}else{
	$_SESSION['msg'] = "Você não tem Acesso!";
	header("Location: tela_login.php");
}*/
?>