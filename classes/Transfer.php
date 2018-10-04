
<?php
require_once 'Token.php';
require_once 'loginToken.php';
echo "csrf =   ";
echo $csrfToken;
echo " ********";
if(isset($_POST['from'],$_POST['to'],$_POST['amount'],$_POST['csrfToken']))
{
	$From=$_POST['from'];
	$To=$_POST['to'];
	$Amount=$_POST['amount'];
	$CSRF=$_POST['csrfToken'];

	echo $CSRF;
	echo " ********";
	if(!empty($From)&& !empty($To)&& !empty($Amount)&& !empty($CSRF))
	{
		if(Token::check($CSRF))
		{				
			echo "success";
			//header('Location: ../Transaction.php');
		}
		else
		{
			echo "fail";
			header('Location: ../login.php');
		} 
	}
	else
	{
		echo "grr";
	}
}
else
{
	echo "zz";
}
?>

