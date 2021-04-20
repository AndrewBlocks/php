<?php ## Использование класса PHP7\Page.
  require_once(__DIR__ . "/PHP7/seo.php");
  require_once(__DIR__ . "/PHP7/tag.php");
  require_once(__DIR__ . "/PHP7/page.php");
  // Использование классов
  $page = new PHP7\Page('О нас', 'Содержимое страницы');
  $page->tags();
?>