<?php ## Разрешение конфликтов
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
  //echo $user1->getInfo();  


  class Moderator extends User {
    public $info;
    public $rights;

    function __construct($name,$password,$email,$city,$info,$rights)
    {
        parent::__construct($name,$password,$email,$city);
        $this->info = $info;        
        $this->rights = $rights;

    }

    function getInfo(){
        $information = parent::getInfo();
        $information .= "{$this->info}"."{$this->rights}";
        return $information;
    }
  }

  $moder = new Moderator("Andrei ", "654321 ", "andrei@gmail.com " , "Kiev ", "Moderator ", "True ");
  echo $moder->getInfo();


  echo "<br />";
  class Test {
    protected $infa;
  }
  class Test2 extends Test{
    public function test() {
        $this->infa = "INFA";
        echo $this->infa;
    }
  }
  $test2 = new Test2();
  $test2->test();
 // $test2->infa = "informational"; - нельзя получить доступ к защищенному свойствту


?>






