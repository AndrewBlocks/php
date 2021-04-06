<?php ## Private - модификатор доступа
    class Hotel
    {
      private $exit;
      public function escape()
      {
        $this->findWayOut(); 
        echo "Let's go through the {$this->exit}!"; 
      }
      public function lock()
      {
        $this->exit = null;
      }        
      private function findWayOut()
      {
        $this->exit = "main wet wall"; // допустимо
      }
    }

    $theLafayette = new Hotel();
    $theLafayette->findWayOut();  // Ошибка! Доступ закрыт!
    $theLafayette->escape(); // допустимо
    $theLafayette->exit = "hotel doors";  // Ошибка! Доступ закрыт!
  
?>