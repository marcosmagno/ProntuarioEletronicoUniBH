<?php
include_once 'Files-Security/functionValidaUser.php';
verificaUsuario();
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
						<input type="text" name="user" size="20px" class="inputEntrar"
							placeholder="Usuário" />
					</p>

					<p>
						<input type="password" name="password" class="inputEntrar"
							placeholder="Senha" />
					</p>
					<p>
						<input type="submit" name="acessar" value="Entrar"
							class="inputEntrar" />
							<input type="submit" name="cadastrar"  value="cadastrar"
							class="inputEntrar" />

						</p>
				</form>

				<?php


				echo isset($mensageErro) ? $mensageErro : '';?>
				<?php echo isset($sucesso) ? $sucesso : '';?>


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
<?php
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
          echo $name;
            return $name;
        }
    }
}
switch (get_post_action('Entrar', 'cadastrar')) {
    case 'Entrar':
        echo'botao login ok';
				if(isset($_GET['login_attempt'])):
				if($_GET['login_attempt'] == 1):
				echo "Você não tem permissão";
				endif;
				endif;

				break;

    case 'cadastrar':
      //header("location:C:xampp/login");
      header ('location:Cadastra_user.php');
			  break;

    default:
        //echo "Erro";
}

?>
