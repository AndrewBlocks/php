<?php ## Разрешение конфликтов
  class User {
    protected $id;
    private $name;
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
  }

$user1 = new User("id123","NameUser123","PasswordUser123");
$user1->password = "12345";

echo "psw $user1->password";
echo "id $user1->id";
echo "name $user1->name";
?>






