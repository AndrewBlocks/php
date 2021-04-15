<?php 
  $array = array (12, 17, 5, 23, 56);

  echo count($array)."<br />"; // колво эл-ом массива
  sort ($array); // от меньшего значения к большему
  print_r($array);
  echo "<br />";
  rsort($array); // от большего значения к меньшему
  print_r($array);
  echo "<br />";
  asort($array); // от меньшего значения к большему с сохр. ключей
  print_r($array);
  echo "<br />";
  $alist = array("a" => 23, "b"=> 45, "c"=> 32);
  arsort($alist); // от большего значения к меньшем
  print_r($alist);
  echo "<br />";
  ksort($alist); // от меньшего ключа к большему
  print_r($alist);
  echo "<br />";

  shuffle($array); // разброс
  print_r($array);
  echo "<br />";

  echo in_array(17, $array); // существует ли такой эл. в массиве true/false
  echo "<br />";

  $arr_1 = array (10, 2);
  $arr_2 = array (4, 5, 7);
  $array_3 = array_merge($arr_1, $arr_2); // объединяет массивы в
  print_r($array_3);

  $arrDone = array (1, 2, 3, 4, 5, 6, 7);
  print_r($arrDone);
  echo "<br />";
  array_slice($arrDone, 1, -2); // обрезает массив похож на (substr)
  // откидываем первый элемент и последние два	
  print_r($arrDone);