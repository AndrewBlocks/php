<?php ## Вложенные функции.
  function father($a)
  { 
    echo $a, "<br />";
    function child($b) { 
      echo $b + 1, "<br />";
      return $b * $b;
    }
    return $a * $a * child($a); 
    // фактически возвращает $a * $a * ($a+1) * ($a+1)
  }

  father(10);
 // father(20); нельзя переобъявить, выдаст ошибку

?>