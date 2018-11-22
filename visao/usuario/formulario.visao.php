<section>
		<form id="form" name="form" method="POST" action="<?= @$acao ?>">
			<div class="dados">
			<label for="nome">Nome: </label>
			<input id="nome" type="text" name="nome" required="required" minkenght="3"><br>
			<br>

			<label for="email">E-mail: </label>
			<input id="email" type="email" name="email" required="required"><br>
			<br>
			<label for="senha">Senha: </label>
			<input id="senha" type="password" name="senha" required="required" minlength="8" maxlenght="16">
			<label for="senhad">Confirmar Senha: </label>
			<input id="senhad" type="password" name="senhad" required="required" minlength="8" maxlenght="16"><br>
			<br>
			Data de nascimento: <br>
			Dia<input id="diad" type="number" name="dia" required="required" minlength="2" maxlength="2">
			Mês<input id="mesd" type="number" name="mes" required="required" minlength="2" maxlength="2">
			Ano<input id="anod" type="number" name="ano" required="required" minlength="4" maxlength="4">
			<br>
			<br>

			<label for="cpf">CPF: </label>
			<input id="cpf" type="number" name="cpf" required="required" minlength="11" maxlength="11">
			<br>
			<br>

			<label for="Estado">Estado: </label>
			<select name="estado" required="required">
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
			</select>
						
			<label for="Cidade">Cidade: </label>
			<input id="Cidade" type="text" name="cidade" required="required">
			<br>
			<br>
			<label for="Rua">Rua: </label>
			<input id="Rua" type="text" name="rua" required="required">
			
			<label for="numero">Número: </label>
			<input id="Número" type="number" name="numero" required="required">
			<br>
			<br>
			</div>
			<?php extract($_POST); ?>	
  			<input type="submit" name="botao" id="botao" value="Submeter" onclick="validacao()">
			
		</form>
	</section>		
</body>
<script>
function validacao(){
	senha = document.form.senha.value
	senhad = document.form.senhad.value
	if (senha != senhad){
		alert ('As senhas devem ser iguais!');
		document.form.getElementById('senhad').focus();
		document.getElementById('form').action = "";
	}
}
</script>