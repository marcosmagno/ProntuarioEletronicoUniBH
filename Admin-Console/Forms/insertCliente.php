<?php

include_once '../Functions/functionCadastrarCliente.php';



if (isset($_POST['inserirCliente'])):
$Grupo_Controlador = trim(strip_tags($_POST['Grupo_Controlador']));
$Nome_Empresa = trim(strip_tags($_POST['Nome_Empresa']));
$Endereco_Empresa = trim(strip_tags($_POST['Endereco_Empresa']));
$Cidade = trim(strip_tags($_POST['Cidade']));
$Estado = trim(strip_tags($_POST['Estado']));
$CNPJ = trim(strip_tags($_POST['CNPJ']));
$Incricao_Estadual = trim(strip_tags($_POST['Incricao_Estadual']));
$Web_Site = trim(strip_tags($_POST['Web_Site']));
$Numero_Funcionario = trim(strip_tags($_POST['Numero_Funcionario']));
$Ramo_Atividade = trim(strip_tags($_POST['Ramo_Atividade']));
$Historico_Cliente = trim(strip_tags($_POST['Historico_Cliente']));
$Nome_Contato = trim(strip_tags($_POST['Nome_Contato']));
$Cargo_Contato = trim(strip_tags($_POST['Cargo_Contato']));
$Email_Contato = trim(strip_tags($_POST['email_contato']));
$Telefone_Contato = trim(strip_tags($_POST['Telefone_Contato']));


// Validação dos Campos //



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

echo $Grupo_Controlador;
else:
echo $Grupo_Controlador;
endif;
endif;
?>