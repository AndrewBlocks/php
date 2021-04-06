<?php ## Public - модификатор доступа
  class Hotel
  {
    public $exit;
    public function escape()
    {
      echo "Let's go through the {$this->exit}!";
    }
  }
  $theLafayette = new Hotel();
  $theLafayette->exit = "main wet wall";   // Допустимо
  $theLafayette->escape()   // Допустимо
  
?>