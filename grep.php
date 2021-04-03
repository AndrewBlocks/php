<?php ## Применение preg_grep().
  foreach (preg_grep('/^ex\d/s', glob("*")) as $fn)  // ищет совпадения и заменяет	
    echo "Файл примера: $fn<br />";
?>