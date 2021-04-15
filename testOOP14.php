<?php 
  
  class User {

    private $name;
    private $id;
    private $city;

    function __construct($name,$city)
    {
      $this->name = $name;
      $this->city = $city;
    }

    function setId($id){
      $this->id = $id;
    }
    public function __clone()
    {
      $this->id = 0;
    }
  }

  $user1 = new User("Alexey", "Kyev");
  $user1->setId(5662);
  $user2 = clone $user1;

  var_dump($user2);

?>






