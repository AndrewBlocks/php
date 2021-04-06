<?php ## Использование класс с деструктором
	require_once "logger.php";
	// Создаем в цикле много объектов FileLogger
	for ($n = 0; $n < 10; $n++) {
		$logger = new FileLogger("test$n", "test.log");
		$logger->log("Hello!");
		// $loggers[] = $logger; массив для накапливания объектов
		// Теперь нет необходимости заботиться о корректном
		// уничтожении объекта - PHP делает все сам!
	}
	exit();
?>
