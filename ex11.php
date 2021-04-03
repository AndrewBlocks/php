<?php ## Многострочность.
  $str = file_get_contents(__FILE__);
  $str = preg_replace('/^/m', "\t", $str);   // модификатор s работает с одной строкой в отличие от m
  echo "<pre>".htmlspecialchars($str)."</pre>";
?>