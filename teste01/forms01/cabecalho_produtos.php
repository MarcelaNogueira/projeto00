
<form action="bd/gravar_produtos.php" method="post">
	<div id="cadastro">
		<fieldset>
		    <legend>Cadastro de Produtos:</legend>
		    	<div id="esquerda">
				    Codigo:<br>
				    <input type="text" name="codigo" value="" id="cod">
				    <br><br>
				    Descrição:<br>
				    <input type="text" name="descricao" value="" id="descricao" autofocus>
				    <br>
				    
				</div>
				<div id="meio">
					Valor:<br>
				    <input type="number" name="valor" value=0 id="valor">
				    <br><br>
					Bloqueado:<br>
					<input type="radio" name="bloqueado" value="Sim">Sim
					<input type="radio" name="bloqueado" value="Não" checked="checked">Não
					<br>
				</div>
				
				<div id="direita">
						
			    	
				</div>    
		    
		</fieldset>
	</div>	
	<br/>
	<?php echo '<hr />';?>
	<div class="botao"><button name="btn" value="incluir">Incluir</button></div>
	<div class="botao"><button name="btn" value="alterar">Alterar</button></div>
	<div class="botao"><button name="btn" value="excluir">Excluir</button></div>
</form>
<form action="bd/excluir_produtos.php" method="post">

	
</form>
