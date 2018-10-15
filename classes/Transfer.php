
<?php
require_once 'Token.php';
require_once 'loginToken.php';

if(isset($_POST['from'],$_POST['to'],$_POST['amount'],$_POST['csrfToken']))
{
	$From=$_POST['from'];
	$To=$_POST['to'];
	$Amount=$_POST['amount'];
	$CSRF=$_POST['csrfToken'];

	
	if(!empty($From)&& !empty($To)&& !empty($Amount)&& !empty($CSRF))
	{
		if(Token::check($CSRF))
		{				
			echo "<script>alert('Success')
			</script>";
			
		}
		else
		{
			
			//header('Location: ../login.php');
			echo "<script>alert('Error')
			</script>";
		} 
	}
	else
	{
	}
}
else
{
	echo "Please fill all fields";
}
?>

