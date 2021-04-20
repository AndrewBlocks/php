<?php ## Использование пространств имен
  require_once 'namespace-few.php';
  $page = new PHP7\classes\Page('Контакты', 'Содержимое страницы');
  PHP7\functions\debug($page);
?>