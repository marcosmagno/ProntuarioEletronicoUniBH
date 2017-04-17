<?php
include_once 'Files-Security/functionValidaUser.php';
liberaUser();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Data - CRM</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<div class="">
				<h1>Acessar o Sistema</h1>
				<br />
				<form action="" method="post">
					<p>
						<input type="text" name="usuario" size="20px" class="inputEntrar"
							placeholder="E-mail" />
					</p>

					<p>
						<input type="password" name="senha" class="inputEntrar"
							placeholder="Senha" />
					</p>
					<p>
						<input type="submit" name="acessar" value="Entrar"
							class="inputEntrar" />
				
				</form>

				<?php 
				
				
				echo isset($mensageErro) ? $mensageErro : '';?>
				<?php echo isset($sucesso) ? $sucesso : '';?>

				<?php

				if(isset($_GET['login_attempt'])):
				if($_GET['login_attempt'] == 1):
				echo "Você não tem permissão";
				endif;
				endif;
				?>
			</div>
		</header>
	</div>
	<!-- /container -->
	<script src="../js/classie.js"></script>
	<script src="../js/gnmenu.js"></script>
	<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
</body>
</html>
