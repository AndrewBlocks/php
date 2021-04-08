<?php 
	class user
	{
		// Конструктор
		public function __constructor($name, $password)
		{
			$this->name = $name;
			$this->password = $password;
			$this->referrer = $_SERVER['PHP_SELF'];
			$this->time = time();
		}
		public function __sleep()
		{
			
			return ['name', 'referrer', 'time'];
		}
		public function __wakeup()
		{
			$this->time = time();
		}
		// Имя пользователя
		public $name;
		// Его пароль
		public $password;
		// Последняя посещенная страница
		public $referrer;
		// Время авторизации пользователя
		public $time;

	}


?>
