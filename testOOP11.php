<?php 

  interface FirstInterface {
    public function getName();
  }
  interface SecondInterface{
    public function getStatus();
  }
  interface ThirdInterface extends FirstInterface,SecondInterface{
    public function ID();

  }

  class Test implements FirstInterface,SecondInterface{
    public $name = "Andrei";
    public $status = "Admin";
    public $id = "123";

    public function getName(){
      echo $this->name;
    }
    public function getStatus(){
      echo $this->status;
    }
    public function ID(){
      echo $this->id;
    }

  }
  $user1 = new Test();
  $user1->getStatus();
  $user1->getName();
  $user1->ID();
?>






