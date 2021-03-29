<?php // Сортировка массива по ключам.
  $A = [
    "c" => "Alpha",
    "a" => "Zero",
    "d" => "Processor",
    "b" => "Weapon",
  ];
  ksort($A);
  print_r($A);
  // Array([a]=>Zero [b]=>Weapon [c]=>Alpha [d]=>Processor) 
  // Функция krsort упорядочивает не по возрастанию, а по убыванию ключей
?>