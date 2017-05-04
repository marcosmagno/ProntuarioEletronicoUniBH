<?php

function conexao_bd_tig_unibh() {
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('BD','tig_unibh');
	
	/*
	 * A PDO_MYSQL Data Source Name (DSN) é composta dos seguintes elementos:
	 * DSN prefix
     * O prefixo DSN é:
     * mysql:.host: ( O hostname no qual o servidor do banco de dados está. )
	 * port: ( O número da porta onde o servidor do banco de dados está escutando. )
	 * dbname ( O nome do banco de dados. )
  	 * unix_socket ( O socket Unix do MySQL (não deve ser usado com host ou port). )
	 */
	
	$dsn = "mysql:host=".HOST.";dbname=".BD; // dsn = Data Source Name
	
	try {
		$conectar = new PDO($dsn, USER, PASS);
		$conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return  $conectar;
	}catch(PDOException $e) {
		echo "Erro ao conectar ao banco".$e->getMessage();
		
	}
}
































?>