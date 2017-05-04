<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Google Nexus Website Menu</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<script src="../js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Procurar</span></a>
								</li>
								<li><a class="gn-icon gn-icon-download"><b>Inserir</b></a></li>
								<li>
									<a class="gn-icon gn-icon-archive"><b>Status</b></a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Homologando</a></li>
										<li><a class="gn-icon gn-icon-pictures">Fechada</a></li>
										<li><a class="gn-icon gn-icon-videos">Mais</a></li>
									</ul>
								</li>
							</ul>
							
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a class="codrops-icon codrops-icon-prev" href="../index.html"><span></span></a></li>
				<li><a href="http://tympanus.net/codrops"><b>Oportunidade</b></a></li> <!-- Nome da Página -->
				<li><a href="http://tympanus.net/codrops">Perfil</a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li>
			</ul>
			<header>
				<h1>Google Nexus Website Menu <span>A sidebar menu as seen on the <a href="http://www.google.com/nexus/index.html">Google Nexus 7</a> page</span></h1>	
			</header> 
		</div><!-- /container -->
		<script src="../js/classie.js"></script>
		<script src="../js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>