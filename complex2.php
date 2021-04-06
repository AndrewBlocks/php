<?php ## Пример класса
  class MathComplex2
  {
  	// Свойства: действительная и мнимая части
  	public $re, $im;
  	// Инициализация нового объекта
  	function __construct($re, $im)
  	{
  		$this->re += $re;
  		$this->im += $im;
  	}
    //function add(MathComplex2 $y
    function add(MathComplex2 $y)
    {
      $this->re += $y->re;
      $this->im += $y->im;
    }
    // Преобразуем число в строку (например, для вывода)
    function __toString()
    {
      return "({$this->re}, {$this->im})";
    }  
  }
  ?>