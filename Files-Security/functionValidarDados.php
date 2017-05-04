<?php
function validarDados($campo, $valor, $tipo) {
	global $mensageErro;

	if(!empty($campo)):

	switch ($tipo) {
		case 'STR':
			$str = filter_var($campo, FILTER_SANITIZE_SPECIAL_CHARS);
			return $str;
			break;

		case 'EMAIL':
			$email = filter_var($campo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			$mensageErro = "Voce deve utilizar um E-mail válido.";
			else:
			return $email;
			endif;
			break;
		default:
			;
			break;
	}

	else:
	$mensageErro = "O campo $valor é obrigatório.";
	endif;

}
?>