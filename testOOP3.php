<?php ## Разрешение конфликтов
  class User {
    public $id;
    public $name;
    public $password; 


    function __construct($id, $name, $password)
    {
      $this->id = $id;
      $this->name = $name;
      $this->password = $password;

    }
    function getInfo()
    {
      return "{$this->id}"."{$this->name}"."{$this->password}";
    }

  }

  $user1 = new User("123", "Andrei", "772447");
  echo $user1->getInfo();

?>













