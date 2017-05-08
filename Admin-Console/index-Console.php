<?php
include_once '../Files-Security/functionValidaUser.php';
protegePagina();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Data - CRM</title>
<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
<link rel="stylesheet" type="text/css" href="../css/demo.css" />
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger"><a class="gn-icon gn-icon-menu"><span>Menu</span>
			</a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li class="gn-search-item"><input placeholder="Search"
								type="search" class="gn-search"><input type="submit" value="Ok" />
								<a class="gn-icon gn-icon-search"><span>Procurar</span> </a>
							</li>
							<li><a href="Pages/Inserir-Cliente.php" class="gn-icon gn-icon-download"><b>Clientes</b>
							</a></li>
							<li><a href="pages/Oportunidade.php" class="gn-icon gn-icon-cog"><b>Oportunidades</b>
							</a></li>
							<li><a class="gn-icon gn-icon-help"><b>Ajuda</b> </a></li>
							<li><a href="http://www.google.com.br"
								class="gn-icon gn-icon-cog"><b>Configurações</b> </a></li>
							<li><a class="gn-icon gn-icon-archive"><b>Arquivos</b> </a>
								<ul class="gn-submenu">
									<li><a class="gn-icon gn-icon-article">Propostas</a></li>
									<li><a class="gn-icon gn-icon-pictures">E-mails</a></li>
									<li><a class="gn-icon gn-icon-videos">Videos</a></li>
								</ul>
							</li>
						</ul>

					</div>
					<!-- /gn-scroller -->
				</nav>
			</li>
			<li><img src=<?php echo $destino = 'img_profiles/marcosmagno.jpg'?> width=60px></li></li>
			<!-- Nome da Página -->
			<li><a class="codrops-icon codrops-icon-drop"
			href="#"><?php echo $_SESSION['usuarioNome']; ?></span> </a>


			</li>

			<li><a href="http://localhost/webdata/logout.php">Sair</a></li>
		</ul>
	</div>
	<!-- /container -->
	<script src="../js/classie.js"></script>
	<script src="../js/gnmenu.js"></script>
	<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
</body>
</html>
