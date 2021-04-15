<?php ## Разрешение конфликтов
  class User {
    public $id;
    public $name;
    public $password;
    

    public function __construct($id,$name,$password)
    {
        $this->id = $id;
        echo "construct {$this->id}.<br/>";
        $this->name = $name;
        echo "construct {$this->name}.<br/>";
        $this->password = $password;
        echo "construct {$this->password}.<br/>";
    }
   
    public function __destruct()
    {   
        echo "destruct {$this->id}.<br/>";
        echo "destruct {$this->name}.<br/>";
        echo "destruct {$this->password}.<br/>";
        
    }
     
  } 

$countUser = 4;
$connected = true;
//while($connected)
for($i=1; $i<=$countUser; $i++){
    $user = new User("id = $i","NameUser$i","PasswordUser$i");
    unset($user); //destruct

}





?>






