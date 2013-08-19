<?php
namespace Auth
{
	class Password
	{
		/**
		* Return a randon password of string;
		* @param string $len;
		* @param string $string;
		* @return string with randon password generated;
		*/
		public static function generate($len, $string)
		{
			$pass = '';
			$n = strlen($string);

			if(is_null($len))
				throw new \InvalidArgumentException('Insert the first parameter $len');
			
			if(empty($len))
				throw new \InvalidArgumentException('Inform a lenght to generate your password');
			
			if(is_null($string))
				throw new \InvalidArgumentException('Insert the second parameter $string');
			
			if(empty($string))
				throw new \Exception('Parameter $string not to be empty');
			
			
			for($i = 0; $i < $len; $i++){
				$r = rand(0, $n - 1);
				$pass .= $string[$r];
			}

			return (string)$pass;
		}
	}
}

