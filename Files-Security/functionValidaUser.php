<?php
session_start();

include_once 'conexaoBD.php';
include_once 'functionValidarDados.php';

function liberaUser() {
	
	global $mensageErro;
	
	if(isset($_POST['acessar'])):
	$usuario = validarDados($_POST['usuario'], 'LOGIN', 'EMAIL');
	$senha = validarDados($_POST['senha'], 'SENHA', 'STR');

	if(!isset($mensageErro)):

	if(validarUser($usuario, $senha)):
	$sucesso = "Logado com Sucesso";
	else:
	$mensageErro = "Erro ao logar no sistema";
	endif;
	endif;
	endif;
}



function validarUser($usuario, $senha){
	global $mensageErro;
	$conexao = comPdo();

	try {

		$logar = $conexao->prepare("Select * from cadastro where email = ? AND senha = ?  LIMIT 1");
		$logar->bindValue(1, $usuario);
		$logar->bindValue(2, $senha);
		$logar->execute();

		if($logar->rowCount() == 1):
		$dados = $logar->fetch(PDO::FETCH_ASSOC);

		$_SESSION['userLogado'] = true;
		$_SESSION['usuarioEmail'] = $dados['email'];
		$_SESSION['usuarioNome'] = $dados['nome'];
		$_SESSION['usuarioId'] = $dados['id'];
		$_SESSION['usuarioLogado'] = $usuario;		
		$_SESSION['usuarioSenha'] = $senha;


		header('location:Admin-Console/index-Console.php');

		else:
		$mensageErro = "Erro ao logar - Você não tem acesso.";
		endif;

	}catch (PDOException $e) {
		echo "Erro" .$e->getFile() .$e->getLine();
	}
}


function protegePagina() {
	global $_SG;

	if (!isset($_SESSION['usuarioId']) OR !isset($_SESSION['usuarioNome'])) {

		// Nâo há usuário logado

		expulsaVisitante();

	} else if (!isset($_SESSION['usuarioId']) OR !isset($_SESSION['usuarioNome'])) {

		if ($_SG['validaSempre'] == true) {

			// Verifica se os dados salvos na sessão batem com os dados do banco de dados
				
				
			if (!validarUser($_SESSION['usuarioLogado'], $_SESSION['usuarioSenha'])) {
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