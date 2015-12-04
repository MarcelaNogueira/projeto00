<?php
	
	include_once('conexaoBD.php');

	// print $_POST["descricao"];
	// print $_POST["valor"];

	// $con = mysqli_connect("localhost", "root", "root", "oficial");

	if($_POST["btn"] == "incluir"){
	
		$sql = "INSERT INTO Produtos (descricao, valor) VALUES('".$_POST["descricao"]."',".$_POST["valor"].")";

	}elseif($_POST["btn"] == "alterar"){
		$sql = "UPDATE Produtos SET
				descricao = '".$_POST['descricao']."',
				valor = ".$_POST['valor']."
				WHERE cod = ".$_POST['codigo'];

	}else{

		$sql = "DELETE FROM Produtos WHERE cod=".$_POST["codigo"];

	}
	$result = $con->query($sql);
	
	if($result)
		
		print('GRAVADO COM SUCESSO');
		
	else
		echo 'ERRO AO GRAVAR ' . mysqli_error();
?>
	<?php header('Location: ./index.php') ?>;
	
	