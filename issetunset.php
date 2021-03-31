<?php 
	$x = 10;
	if (isset ($x))
		echo "Var exists";
	else 
		echo "Var doesn't exist";
	echo "<br />";
	unset ($x);
	if (isset ($x)) 
		echo "Var exists";
	else 
		echo "Var doesn't exist";
	echo "<br />";

	$x = "15";
	$bool = false;
	$null = null;

	echo "Is Numeric — ".is_numeric($x)."<br />";
	echo "Is Integer — ".is_integer($x)."<br />";
	echo "Is Double — ".is_double($x)."<br />";
	echo "Is String — ".is_string($x)."<br />";
	echo "Is Boolean — ".is_bool($bool)."<br />";
	echo "Is Scalar — ".is_scalar($bool)."<br />"; // Проверяет переменную Истина если она не объект и не массив
	echo "Is Null — ".is_null($null)."<br />"; // если есть значение то выдаст Ложь
	echo "Is Array — ".is_array($x)."<br />";
	echo "Type — ".gettype($x)."<br />";
	echo "Type — ".gettype($null)."<br />";




?>
