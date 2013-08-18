<?php

/**
* Função que gera um password de uma string passada e do tamanho passado no parâmetro.
*/
function GeneratePassword($len, $string)
{
	$pass = '';
	$n = strlen($string);

	for($i = 0; $i < $len; $i++){
		$r = rand(0, $n - 1);
		$pass .= $string[$r];
	}

	return (string)$pass;
}

echo GeneratePassword(6, "abcdefghijklmnopqrstuvxzABCDEFGHIJKLMNOPQRSTUVXZ!@#$%^&*()_-+=|")."\n";