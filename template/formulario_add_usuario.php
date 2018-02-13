<!DOCTYPE html>
<html>
<head>
	<title>iTask - Seja Bem Vindo</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

	<div id="container">

		<div id="titulo-login"><h1>Seja Bem Vindo. Cadastra-se para continuar</h1></div>

		<div id="corpo">

			<div id="logo-login">
				<img class="img-logo" src="img/logo-login.svg" width="60px" alt="logo do itask">
				<h1 class="txt-logo">iTask</h1>
			</div>

			<div class="margin-bottom"></div>

			<form method="post">

				<label class="form-label" for="nome">Nome Completo:</label>
				<input class="form-input" type="text" id="nome-completo" name="nome-completo">

				<label class="form-label" for="nome">Usuario:</label>
				<input class="form-input" type="text" id="nome" name="nome">

				<label class="form-label" for="senha">Senha:</label>
				<input class="form-input" type="password" id="senha" name="senha">

				<!-- <button type="reset" class="botao margin-top" id="btn-limpar">Limpar</button> -->
				<button type="submit" class="botao margin-top" id="btn-enviar">Entrar</button>

				<div class="margin-top">

				<p><a href="#" id="rec-senha" class="link-login">Recuperar Senha</a></p>

				<p><a href="#" id="cad" class="link-login">Cadastrar-se</a></p>

			</form>
			

		</div>

	</div>

	<!-- <script type="text/javascript">
		
		$("#btn-enviar").click(function(){

			var error = "Campo Obrigatório"

			if ($("#nome").val() == "") {
                    
                    $("#txt").html(error);
                    
            }

            if ($("#senha").val() == "") {
                    
                    $("#txt").html(error);
                    
            }

		});
	</script> -->

</body>
</html>