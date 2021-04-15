<?php ## $_COOKIE

/*	setcookie("num", 10, time () + 7); // num - название, 10 - значение
	if(isset($_COOKIE["num"]))
		echo "Куки установлены";
	else 
		echo "Куки не установлены";
	echo $_COOKIE["num"]; */

	$num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
	$num++;
	setcookie("num", $num, time () + 4);
	echo "Пользователь обновил страницу $num раз";




?>
