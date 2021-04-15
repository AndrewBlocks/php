<?php 

class User {
  public static $name;

  public static function hello(){
    echo "Hello ".self::$name."";
  }
}

User::$name="Alex ";
echo User::$name;
User::hello();

?>






