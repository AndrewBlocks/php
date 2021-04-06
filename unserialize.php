<?php ## Восстановление объекта из строки
  // Подключаем определение класс cls
  require_once("cls.php");

  // Извлекаем сериализованный объект из файла
  $fd = fopen("text.obj", "r");
  if(!$fd) exit("Невозможно открыть файл");
  $text = fread($fd, filesize("text.obj"));
  fclose($fd);

  // Восстанавливаем объект
  $obj = unserialize($text);

  // Выводим дамп объекта
  echo "<pre>";
  print_r($obj);
  echo "</pre>";
?>
