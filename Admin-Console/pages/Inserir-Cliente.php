<?php
include_once '../../Files-Security/functionValidaUser.php';
protegePagina();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Data - CRM</title>
<meta name="description"
	content="A sidebar menu as seen on the Google Nexus 7 website" />
<meta name="keywords"
	content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="../../favicon.ico">
<link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
<link rel="stylesheet" type="text/css" href="../../css/demo.css" />
<link rel="stylesheet" type="text/css" href="../../css/component.css" />
<script src="../js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>
				<b>Cadastrar Cliente</b>
			</h1>
			<br />
			<form action="../Insert/insertCliente.php" method="post" name="inserirCliente">
				<p>
					<input type="text" name="Grupo_Controlador" size="30px" class="inputEntrar"
						placeholder="Grupo Controlador" /> 
						
					<input type="text" size="30px"
						name="Nome_Empresa" class="inputEntrar" placeholder="Nome da Empresa" />

					<input type="text" name="Endereco_Empresa" size="30px" class="inputEntrar"
						placeholder="Endereço da Empresa" />
				</p>

				<p>
					<input type="text" size="30px" name="Cidade" class="inputEntrar"
						placeholder="Cidade" /> 
						
					<input type="text" size="30px"
						name="Estado" class="inputEntrar" placeholder="Estado" />
						
					<input type="text" size="30px" name="CNPJ" class="inputEntrar"
						placeholder="CNPJ da Empresa" />
				</p>

				<p>
					 <input type="text" size="30px"
						name="Incricao_Estadual" class="inputEntrar" placeholder="Inscrição Estadual" />

					<input type="text" size="30px" name="Web_Site" class="inputEntrar"
						placeholder="Web Site da Empresa" />
						
					<input type="text" size="30px" name="Numero_Funcionario" class="inputEntrar"
						placeholder="Nº de Funcionários" />
				</p>

				<p>
					 <input type="text" size="30px"
						name="Ramo_Atividade" class="inputEntrar" placeholder="Ramo de Atividade" />

					<input type="text" size="30px" name="Historico_Cliente" class="inputEntrar"
						placeholder="Histórico do Cliente" />
						
					<input type="text" size="30px" name="Nome_Contato" class="inputEntrar"
						placeholder="Nome do Contato" />
				</p>

				<p>
					 <input type="text" size="30px"
						name="Cargo_Contato" class="inputEntrar" placeholder="Cargo do Contato" />

				<input type="text" size="30px" name="Email_Contato" class="inputEntrar"
						placeholder="E-mail do Contato" />
						
					<input type="text" size="30px" name="Telefone_Contato" class="inputEntrar"
						placeholder="Telefone do Contato" />
				</p>

				<input type="submit" name="inserirCliente" value="Cadastrar"
					class="inputEntrar" />

			</form>
		</header>

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
							<li><a href="pages/Inserir-Cliente.php"
								class="gn-icon gn-icon-download"><b>Clientes</b> </a></li>
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
			<li><a class="codrops-icon codrops-icon-prev"
				href="../index-Console.php"><span></span> </a></li>
			<!-- Nome da Página -->
			<li><a href="http://localhost/webdata/logout.php">Clientes (  )</a></li>
			<li><a class="codrops-icon codrops-icon-drop"
				href="http://tympanus.net/codrops/?p=16030"><span><?php echo $_SESSION['usuarioNome']; ?>
				</span> </a></li>
			
			<li><a href="http://localhost/webdata/logout.php">Sair</a></li>
		</ul>

	</div>

	<script src="../../js/classie.js"></script>
	<script src="../../js/gnmenu.js"></script>
	<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
</body>
</html>
