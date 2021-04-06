<?php ## Использование констант в классах. Файл const.php
  class cls
  {
    const NAME = "cls";
    public function method()
    {
      // echi $this->NAME; // ОШИБОЧНОЕ ОБРАЩЕНИЕ
      echo self::NAME;
      echo "<br />";
      echo cls::NAME;
      echo "<br />";
    }
  }

  echo cls::NAME; // cls
?>