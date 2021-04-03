<?php ## Генерация семейства функций.
  for ($i = 1; $i <= 1000; $i++)
    eval("function printSquare$i() { echo $i * $i; }");
  printSquare2();  
  echo "</br>";
  printSquare20(); 

 /* $code= file_get_contents($fname, true);
  eval("?>$code<?php");  запускает код с файла */
?>