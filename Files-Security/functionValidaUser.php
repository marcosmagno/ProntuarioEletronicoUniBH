<?php
session_start();
include_once 'conexaoBD.php';
include_once 'functionValidarDados.php';

function verificaUsuario() {
	/*
		Verifica dados do Usuário
	*/	
	global $mensageErro;
	
	if(isset($_POST['acessar'])):
		
		/* Recebe dados via Post da página Inicial
			$usuario -> campo user [ index.php ]
			$password -> campo password [index.php]
		*/
		$usuario = $_POST['user'];
		$password = $_POST['password'];

		/*
		 Se não existir error ( mensageErro)
		 	chama a Função validaDadosUsuario($usuario, $password)
		 */

			if(!isset($mensageErro)):
				if(validaDadosUsuario($usuario, $password)):
					$sucesso = "Logado com Sucesso";
				else:
					$mensageErro = "Usuário ou Senha errados";
				endif;
			endif;
	endif;
}



function validaDadosUsuario($usuario, $password){
	global $mensageErro;
	
	
	
	$conexao = conexao_bd_tig_unibh(); // Chama conexão com Banco de Dados

	try {
		// Seleciona os dados do usuario [ usuario ] [ senha ]
		$logar = $conexao->prepare("Select * from user where user = ? AND password = ?  LIMIT 1");
		$logar->bindValue(1, $usuario);
		$logar->bindValue(2, $password);
		// Executa o script select
		$logar->execute();

		// função rowCount() conta quantos dados foram selecionados no script Select do SQL

		if($logar->rowCount() == 1):
				// cria uma estrutura FETCH_ASSOC
				$dados = $logar->fetch(PDO::FETCH_ASSOC);

				// Cria dados de SESSION
				$_SESSION['userLogado'] = true; // get usuario logado : TRUE
				$_SESSION['usuarioEmail'] = $dados['email']; // get email
				$_SESSION['usuarioNome'] = $dados['first_name']; // get nome
				$_SESSION['usuarioId'] = $dados['id']; // get id
				$_SESSION['usuarioLogado'] = $dados['user']; // get usuário
				

		// Redireciona o usuário para a página do DASHBORD
		header('location:Admin-Console/index-Console.php');

		else:
				$mensageErro = "Erro ao logar - Você não tem acesso.";
		endif;

	}catch (PDOException $e) {
		echo "Erro" .$e->getFile() .$e->getLine();
	}
}


/*
	Função para proteger às páginas
	que devẽrão ser autenticadas
*/
function protegePagina() {
	global $_SG;

	if (!isset($_SESSION['usuarioId']) OR !isset($_SESSION['usuarioNome'])) {

		// Nâo há usuário logado

		expulsaVisitante();

	} else if (!isset($_SESSION['usuarioId']) OR !isset($_SESSION['usuarioNome'])) {

		if ($_SG['validaSempre'] == true) {

			// Verifica se os dados salvos na sessão batem com os dados do banco de dados
				
				
			if (!validarUser($_SESSION['usuarioLogado'], $_SESSION['usuariopassword'])) {
				// Os dados n�o batem, manda pra tela de login
				expulsaVisitante();
			}
		}
	}
}




function expulsaVisitante() {

	// Remove as váriavies ( Caso elas existam )
	unset($_SESSION['usuarioEmail'], $_SESSION['usuarioNome'], $_SESSION['usuarioId']);

	// Manda pra tela de login
	header('Location: http://localhost/webdata/index.php?login_attempt=1');
}


?>