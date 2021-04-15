<?php ## $_SESSION


	session_start(); 

	$num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
	$num++;
	$_SESSION["num"] = $num;
	echo "Пользователь обновил страницу $num раз";

	//session_destroy(); - удаляет сессию




?>
