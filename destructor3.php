<?php ## Разрешение конфликтов
  class myClass {
   public function __construct() 
   {
       echo 'construct';
   }

   public function __destruct()
   { 
       echo 'destruct';
   }
}
    $test = new myClass();
    unset($test); //destruct
    $test = null; //destruct
    exit(); // destruct
?>






