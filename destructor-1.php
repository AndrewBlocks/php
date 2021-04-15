<?php ## Разрешение конфликтов
  class FileManager {
    public $file;

    public function __construct($name) {
      $this->file = fopen($name, 'r+');
    }

    public function getLine() {
      return fgets($this->file);
    }

    public function __destruct() {
      echo "\nSrabotal destructor\n\n";
      fclose($this->file);
    }
  }


  function getFirstLine($name) {
    return (new FileManager($name))->getLine();
  }


  echo getFirstLine('traits-conflict.php');
  echo getFirstLine('traits-conflict.php');
  echo getFirstLine('traits-conflict.php');
  echo getFirstLine('traits-conflict.php');
?>






