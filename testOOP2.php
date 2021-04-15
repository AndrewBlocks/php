<?php ## Разрешение конфликтов
  class User {
    public $id = "123";
    public $name = "Andrei";
    public $password = "pswd"; 

    function getInfo() {
        return "{$this->name}"."{$this->surname}";
    }       
  }
  $admin = new User();
  $admin->name = "Alex";
  $admin->surname = "Ivanov";
  echo "Пользователь :{$admin->getInfo()}";

?>






