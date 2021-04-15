<?php ## Пространство имен
  namespace Home; // пространство имен должно быть первым
  
  class User {
    public $name;
    public $password;
    public $email;
    public $city;   

    public function __construct($name,$password,$email,$city)
    {
        $this->name = $name;        
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;        
    }
    function getInfo(){
        $information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
        return $information;
    }

  }
  $user1 = new User("Alex ", "123456 ", "alexey@gmail.com " , "Moscow ");
  echo $user1->getInfo(); 


?>






