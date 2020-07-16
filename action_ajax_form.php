<?php

session_start();



$EMAIl_USER[1] = "yaroslav.chernicov777@gmail.com";
$EMAIl_USER[2] = "andrey@gmail.com";
$EMAIl_USER[3] = "vanya@gmail.com";


for ($U=1; $U<=count ($EMAIl_USER); $U++)
{
	if($_POST["email"]==$EMAIl_USER[$U]) {
		
		 $EXIT= true;
	}
	
}





if (isset($_POST["name"]) && isset($_POST["surname"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
    	'surname' => $_POST["surname"],
		'email' => $_POST["email"],
		'password' => $_POST["password"],
		're_password' => $_POST["re_password"]
		
		
    ); 
	
	if($EXIT==true)
	{
		$result['newre'] = 'ОШИБКА такой юзер уже есть';
		$_SESSION['user']='ERROR';
		
		$log = date('Y-m-d H:i:s') .' '. $_SESSION['user'].' Юзер '.$_POST["email"].' уже есть в базе, пользователь не зарегестрирован';
		file_put_contents(__DIR__ . '/log1.txt', $log . PHP_EOL, FILE_APPEND);
		
	}	
	else
	{
		$result['newre'] = 'Поздравляем вы зарегестрировались обнвите страницу';
		$_SESSION['user']='GOOD';
		
		$log = date('Y-m-d H:i:s') .' '. $_SESSION['user'].' Юзер '.$_POST["email"].' Был добавлен в базу, пользователь успешно зарегестрирован';
		file_put_contents(__DIR__ . '/log1.txt', $log . PHP_EOL, FILE_APPEND);
	}	

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>