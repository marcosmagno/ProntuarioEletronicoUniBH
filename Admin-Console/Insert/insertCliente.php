<?php
session_start();
include_once '../Functions/functionValidaDados.php';
include_once '../Functions/functionCadastrarCliente.php';
include_once '../Files-Security/functionValidaUser.php';
protegePagina();

if (isset($_POST['inserirCliente'])):
$Grupo_Controlador = $_POST['Grupo_Controlador'];
$Nome_Empresa = $_POST['Nome_Empresa'];
$Endereco_Empresa = $_POST['Endereco_Empresa'];
$Cidade = $_POST['Cidade'];
$Estado = $_POST['Estado'];
$CNPJ = $_POST['CNPJ'];
$Incricao_Estadual = $_POST['Incricao_Estadual'];
$Web_Site = $_POST['Web_Site'];
$Numero_Funcionario = $_POST['Numero_Funcionario'];
$Ramo_Atividade = $_POST['Ramo_Atividade'];
$Historico_Cliente = $_POST['Historico_Cliente'];
$Nome_Contato = $_POST['Nome_Contato'];
$Cargo_Contato = $_POST['Cargo_Contato'];
$Email_Contato = validarDados($_POST['Email_Contato'],'EMAIL');
$Telefone_Contato = $_POST['Telefone_Contato'];

if (empty($Grupo_Controlador)):
{

echo "<script>
    alert('Preencha o campo Nome');
    history.go(-1);
</script>";
exit;
}
endif;
	if(cadastrarCliente( $dados = array(
	1=> $Grupo_Controlador,
	2=> $Nome_Empresa,
	3=> $Endereco_Empresa,
	4=> $Cidade,
	5=> $Estado,
	6=> $CNPJ,
	7=> $Incricao_Estadual,
	8=> $Web_Site,
	9=> $Numero_Funcionario,
	10=> $Ramo_Atividade,
	11=> $Historico_Cliente,
	12=> $Nome_Contato,
	13=> $Cargo_Contato,
	14=> $Email_Contato,
	15=> $Telefone_Contato))):
	
		return true;
	else:
		return false;
	endif;
	endif;
	?>