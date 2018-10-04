<?php
class Token
{
	public static function generate()
	{
		return $_SESSION['TokenSaved']=base64_encode(openssl_random_pseudo_bytes(32));
	}

	public static function check($token)
	{
		if(isset($_SESSION['TokenSaved'])&& $token === $_SESSION['TokenSaved'])
		{
			unset($_SESSION['TokenSaved']);
			return true;
		}
		return false;
	}
}
?>	