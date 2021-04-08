<?php ## Оператор Instanceof
	require_once "StaticPage.php";
	function echoPage($obj)
	{
		$class = "Page";
		if (!($obj Instanceof $class))
			die("Argument 1 must be an instance of $class<br />");
		$obj->render();
	}
	$page = new StaticPage(3);
	echoPage($page);



?>
