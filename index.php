<?php
	require_once('bootstrap.php');
	
	$msg = new \Message();
	$pass = '';
	$n = '';
	try
	{
		if(isset($_POST['generate'])){
			$n = $_POST['lenght'];
			$pass = Auth\Password::generate($n, md5(date('DYms')));
		}
	}
	catch(Exception $e)
	{
		$msg->newMessage($e->getMessage());
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Password Generator</title>
	</head>
<body>
	<h1>Password Generator</h1>
	<h3>Press button to generate a randon password!</h3>

	<form method="post" action="">
		<label for="lenght">Lenght</label>
		<input type="text" id="lenght" name="lenght" placeholder="Enter with a lenght of your password" value="<?=$n?>" />		
		<input type="submit" name="generate" value="Generate"/>
	</form>
	<?=$msg->message;?>
	<span><?=$pass;?></span>

</body>
</html>