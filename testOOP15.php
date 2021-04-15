<?php 
  
  class GetSet{
    private $number = 1;

    public function __get($name) {
      echo "You get {$name}";
    }
    public function __set($name, $value) {
      echo "You set {$name} to {$value}";
      //echo "You set {$name} to {$value}";
    }
  }
  $obj = new GetSet();
  echo $obj->number;
  echo $obj->number = 689;

?>






