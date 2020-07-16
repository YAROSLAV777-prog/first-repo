<? session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>AJAX</title>
  <meta name="description" content="Article FRUCTCODE.COM. How to send ajax form.">
  <meta name="author" content="fructcode.com">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>

<body>

	
	
	<div id="result_form"></div> <br>
	
	
	<?
	if ($_SESSION['user'] == "ERROR" || $_SESSION['user'] == "START"){
		echo '
		
		<form method="post" id="ajax_form" action="" >
				<input type="text" name="name" placeholder="Имя" /><br>
				<input type="text" name="surname" placeholder="Фамилия" /><br>
				<input type="text" name="email" placeholder="email" /><br>
				<input type="password" name="password" placeholder="Пароль" /><br>
				<input type="password" name="re_password" placeholder="Повторите пароль" /><br>
				
				<input type="button" id="btn" value="Отправить" />
		</form>

		';
		
		
		//$log = date('Y-m-d H:i:s') .' '. $_SESSION['user'];
		//file_put_contents(__DIR__ . '/log1.txt', $log . PHP_EOL, FILE_APPEND);
	}	
	
	//echo $_SESSION['user'];
	
	if ($_SESSION['user'] == "GOOD"){
	
		echo 'Вы залогинились<br>';
		echo '<a href="/index.php?sess=1">Выйти из аккаунта</a><br>';
	
	
		//$log = date('Y-m-d H:i:s') .' '. $_SESSION['user'];
		//file_put_contents(__DIR__ . '/log1.txt', $log . PHP_EOL, FILE_APPEND);
	}	
	
	
	?>
	
	
	
	<?
		
		//echo '<a href="/JAVAS.php">JAVAS.php</a><br>';
		
		if ($_GET["sess"]==1)
		{	
			$_SESSION['user']='START';
			//echo $_SESSION['user'];
			
		
		}
		
	?>
   

   

    
</body>
</html>