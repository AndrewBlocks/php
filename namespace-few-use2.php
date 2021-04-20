<?php ## Импортирование
  require_once 'namespace-few.php';

  use PHP7\classes\Page;
  use PHP7\functions as functions;

  $page = new Page('Контакты', 'Содержимое страницы');
  functions\debug($page);
?>