<?php ## Проверка класса File_Logger_Debug.
  require_once "debug.php";
  $logger = new FileLoggerDebug("test.log");
  $logger->log("Обычное сообщение");
  $logger->debug("Отладочное сообщение");
?>