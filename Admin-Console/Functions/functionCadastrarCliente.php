<?php
include_once '../../Files-Security/conexaoBD.php';
function cadastrarCliente($dados = array()) {


	if(is_array($dados)):

	try {
		$conexaoBd = comPdo();
			
		$inserirClientes= $conexaoBd->prepare("INSERT INTO clientes (Grupo_Controlador, Nome_Empresa, Endereco_Empresa, Cidade, Estado, CNPJ, Incricao_Estadual, Web_Site, Numero_Funcionario, Ramo_Atividade, Historico_Cliente, Nome_Contato,Cargo_Contato, Email_Contato, Telefone_Contato)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			
		foreach ($dados as $k=>$v):
			$inserirClientes->bindValue($k, $v, PDO::PARAM_STR);
		endforeach;
		
		$inserirClientes->execute();
			
		if($inserirClientes->rowCount() == 1):
				echo "Houve uma Inserção.";			
		else:
				echo "Não houve uma Inserção.";
		endif;
			
			
	} catch (Exception $e) {
		echo "Erro" .$e->getMessage();
	}

	endif;




}