<?php
function validarDados($campo, $tipo){
	global $erro;

	if(!empty($campo)): // Se o campo não estiver vázio:

	switch ($tipo) {
		case 'INT':
			$int = filter_var($campo, FILTER_SANITIZE_NUMBER_INT);

			if(!filter_var($int, FILTER_VALIDATE_INT)):
			$erro = " O valor passado tem q ser um número inteiro";

			else:
			return $int;

			endif;
			break;

		case 'STR':
			$str = filter_var($campo, FILTER_SANITIZE_SPECIAL_CHARS);
			return $str;
			break;

		case 'EMAIL':
			$email = filter_var($campo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			$erro = "o Campo passado não é um email";

			else:
			return $email;
			endif;
			return $email;
			break;

		default:
			;
			break;
	}

	else:

	$erro = "O Campo $valor é obrigatório";
	endif;


}
