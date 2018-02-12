<!DOCTYPE html>
<html>
<head>
	<title>iTask - Seja Bem Vindo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

	<div id="container">

		<div id="titulo-login"><h1>Seja Bem Vindo. Faça login para continuar</h1></div>

		<div id="corpo">

			<h1 id="login">Login</h1>
			

			<form method="get">
				
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-input" type="text" id="nome" name="nome">

				<label class="form-label" for="senha">Senha:</label>
				<input class="form-input" type="password" id="senha" name="senha">

				<!-- <button type="reset" class="botao margin-top" id="btn-limpar">Limpar</button> -->
				<button type="submit" class="botao margin-top" id="btn-enviar">Entrar</button>

				<hr class="margin-top">

				<p><a href="#" id="rec-senha" >Recuperar Senha</a></p>

				<p><a href="#" id="cad">Cadastrar-se</a></p>

			</form>
			

		</div>

	</div>

	<!-- <script type="text/javascript">
		
		$("#btn-enviar").click(function(){

			var error = "<p>Campo Obrigatório</p>"

			if ($("#txtNome").val() == "") {
                    
                    $("#nullNome").html(error);
                    
            }

            if ($("#txtSenha").val() == "") {
                    
                    $("#nullSenha").html(error);
                    
            }

		});
	</script> -->

</body>
</html>