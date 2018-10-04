<?php

require_once 'Token.php';

class retrieveCSRFToken
{
	var $status;
	var $value;
	function __construct($st, $v=null)
	{
		$this->status = $st;
		 $this->value = $v;
	}
}

$csrfToken=Token::generate();
echo json_encode(new retrieveCSRFToken('Success', $csrfToken));

//$_SESSION['TokenSaved']=$csrfToken;

if(isset($_POST['username'],$_POST['Password']))
{
	echo session_id();
	$Password=$_POST['Password'];
	$username=$_POST['username'];

	if(!empty($Password)&& !empty($username))
	{
		if($username === 'user' && $Password === 'user123')
		{
			echo "valid username and pwd , ";
			echo "****";
			session_start();
			echo session_id();
			setcookie("sessionId",session_id());
			
			header('Location: ../Transaction.php');
			//echo $csrf_token;
			/**if(Token::check($csrfToken))
			{				
				echo " Process order";
				header('Location: ../Transaction.php');
			}
			else
			{
				header('Location: ../login.php');
			} **/
		}
		else
		{
			if(isset($_COOKIE["sessionId"]))
			{
				//echo ($_COOKIE["sessionId"]);
				unset($_COOKIE["sessionId"]);
				
				//setcookie("sessionId",'',time()-3600,'/');

			}
			
			echo "invalid username or pwd";
		}
		
	}
}
?>
