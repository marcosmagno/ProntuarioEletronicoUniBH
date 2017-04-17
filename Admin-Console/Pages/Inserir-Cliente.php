<?php

//include_once '../../Files-Security/functionValidaUser.php';
//protegePagina();

/*
 * Página para Inserir Clientes
 * Form -> ../Insert/insertCliente.php
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PEF - Ciência Da Computação [ UNIBH ]</title>
<link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
<link rel="stylesheet" type="text/css" href="../../css/demo.css" />
<link rel="stylesheet" type="text/css" href="../../css/component.css" />
<script src="../js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		<header>
		<h1>FISIOTERAPIA - UNI BH</h1>
			<h2>
				<b>Registro de Atividade da Clínica-Escola</b>
			</h2>
			
			
			<br />
			<form action="../Forms/insertCliente.php" method="post" name="inserirCliente">
			<hr/>
				<p>
					<input type="text" name="Grupo_Controlador" size="60px" class="inputEntrar"
						placeholder="Nome do Paciente:" />					
				</p>
				<p>
					Horário de Atendimento:
					<input type="checkbox" name="vehicle" value="Manhã" class="inputEntrar"> Manhã
					<input type="checkbox" name="vehicle" value="Car" class="inputEntrar"> Tarde
				</p>
				<p>
					Sexo:
					<input type="checkbox" name="vehicle" value="Manhã" class="inputEntrar"> M
					<input type="checkbox" name="vehicle" value="Car" class="inputEntrar"> F
				</p>

				<p>
				Data Nascimento:
				<select name="Dia" class="inputEntrar">
					  <option value="valor1">Dia</option> 
					  <option value="valor2">01</option>
					  <option value="valor2">02</option>
					  <option value="valor2">03</option>
					  <option value="valor2">04</option>
					  <option value="valor2">05</option>
					  <option value="valor2">06</option>
					  <option value="valor2">07</option>
					  <option value="valor2">08</option>
					  <option value="valor2">09</option>
					  <option value="valor2">10</option>
					  <option value="valor2">11</option>
					  <option value="valor2">12</option>
					  <option value="valor2">13</option>
					  <option value="valor2">14</option>
					  <option value="valor2">14</option>
					  <option value="valor2">15</option>
					  <option value="valor2">16</option>
					  <option value="valor2">17</option>
					  <option value="valor2">18</option>
					  <option value="valor2">19</option>
					  <option value="valor2">20</option>
					  <option value="valor2">21</option>
					  <option value="valor2">22</option>
					  <option value="valor2">23</option>
					  <option value="valor2">24</option>
					  <option value="valor2">25</option>
					  <option value="valor2">26</option>
					  <option value="valor2">272</option>
					  <option value="valor2">28</option>
					  <option value="valor2">29</option>
					  <option value="valor2">30</option>
					  <option value="valor2">31</option>


				</select>
				<select name="Dia" class="inputEntrar">
					  <option value="valor1">Mês</option> 
					  <option value="valor2">01</option>
				</select>

				<select name="Dia" class="inputEntrar">
					  <option value="valor1">Ano</option> 
					  <option value="valor2">01</option>
				</select>

				</p>

				<p>
				 <input type="text" size="20px"
						name="Incricao_Estadual" class="inputEntrar" placeholder="Idade:" />
					<select name="Dia" class="inputEntrar">
					  <option value="valor1">Estado Cívil:</option> 
					  <option value="valor2">01</option>
				</select>

				<select name="Dia" class="inputEntrar">
					  <option value="valor1">Escolaridade:</option> 
					  <option value="valor2">01</option>
				</select>
				<input type="text" size="20px"
						name="Incricao_Estadual" class="inputEntrar" placeholder="Profissão:" />

				<input type="text" size="20px" name="Web_Site" class="inputEntrar"
						placeholder="Naturalidade" />
							
				</p>

				<p>
					 Origem:  
					<input type="checkbox" name="vehicle" value="Manhã" class="inputEntrar"> Externo
					<input type="checkbox" name="vehicle" value="Car" class="inputEntrar"> Interno
					
					
				</p>

				<p>
					 <input type="text" size="60px"
							name="Ramo_Atividade" class="inputEntrar" placeholder="Responsável(Nome):" />
 					<input type="text" size="20px"
						name="Cargo_Contato" class="inputEntrar" placeholder="Grau de parentesco:" />
				
				</p>

			<hr/>
				<p>
					<input type="text" size="20px" name="email_contato" class="inputEntrar"
						placeholder="Endereço Residencial:" />
						
					<input type="text" size="5px" name="Telefone_Contato" class="inputEntrar"
						placeholder="Nº" />

					<input type="text" size="10px" name="email_contato" class="inputEntrar"
						placeholder="Bairro:" />
					<input type="text" size="40px" name="email_contato" class="inputEntrar"
						placeholder="Cidade:" />

					<input type="text" size="10px" name="email_contato" class="inputEntrar"
						placeholder="CEP:" />

				</p>


				<p>
					<input type="text" size="15px" name="email_contato" class="inputEntrar"
						placeholder="Telefone:" />
					<input type="text" size="40px" name="email_contato" class="inputEntrar"
						placeholder="E-mail:" />

					<input type="text" size="15px" name="email_contato" class="inputEntrar"
						placeholder="CEP:" />

				</p>



<hr/>
				<p>
					<input type="text" size="20px" name="email_contato" class="inputEntrar"
						placeholder="Endereço Comercial:" />
						
					<input type="text" size="5px" name="Telefone_Contato" class="inputEntrar"
						placeholder="Nº" />

					<input type="text" size="10px" name="email_contato" class="inputEntrar"
						placeholder="Bairro:" />
					<input type="text" size="40px" name="email_contato" class="inputEntrar"
						placeholder="Cidade:" />

					<input type="text" size="10px" name="email_contato" class="inputEntrar"
						placeholder="CEP:" />

				</p>


				<p>
					<input type="text" size="15px" name="email_contato" class="inputEntrar"
						placeholder="Telefone:" />
					<input type="text" size="40px" name="email_contato" class="inputEntrar"
						placeholder="E-mail:" />

					<input type="text" size="15px" name="email_contato" class="inputEntrar"
						placeholder="CEP:" />

				</p>				

<hr/>

<input type="text" size="20px" name="email_contato" class="inputEntrar"
						placeholder="Endereço Emergência:" />


					<input type="text" size="15px" name="email_contato" class="inputEntrar"
						placeholder="Grau de Parentesco:" />
				<input type="text" size="15px" name="email_contato" class="inputEntrar"
						placeholder="Telefone:" />

<br/><br/>

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
			<li><a href="http://localhost/webdata/logout.php">CADASTRO</a></li>
			
			
			<li><a href="http://localhost/webdata/logout.php">Marcos Magno</a></li>
		</ul>

	</div>

	<script src="../../js/classie.js"></script>
	<script src="../../js/gnmenu.js"></script>
	<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
</body>
</html>
