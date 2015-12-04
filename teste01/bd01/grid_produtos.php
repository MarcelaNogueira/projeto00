<?php 
	include_once('bd/conexaoBD.php');
	
	$sql="SELECT * FROM produtos";
	$result = mysqli_query($con,$sql);
	
?>
<div id="lista">
	<fieldset>
		<legend>Produtos</legend>
			<table  id="grid" border ="1" width=100%>
				<tr id="cabec" bgcolor="#009999" >
					<td>Código</td>
					<td>Descricao</td>
					<td>Valor</td>
				</tr>
				<?php
					while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				?>
						<tr>
				            <td><?= $row['cod']; ?></td>
				            <td><?= $row['descricao']; ?></td>
				            <td>R$ <?= $row['valor']; ?></td>
				        </tr>
				<?php
					}
				?>
				
			</table>
			
	</fieldset>
		
</div>