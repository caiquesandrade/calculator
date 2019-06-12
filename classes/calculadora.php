<?php 

class Calculadora{

	private $total;
	private $numero1;
	private $numero2;


	//Assim que a clsse for instanciada ela chamará primeiro a function __construct (pattern) sendo assim irá zerar os valores atribuídos abaixo
	function __construct(){
		$this->total = 0;
		$this->numero1 = 0;
		$this->numero2 = 0;
	}


	//getter and setter

	public function setNumero1($parametro_numero1){
		$this->numero1 = $parametro_numero1;

	}

	public function setNumero2($parametro_numero2){
		$this->numero2 = $parametro_numero2;

	}


	//Operações

	public function somar(){
		$this->total = $this->numero1 + $this->numero2;
	}

	public function subtrair(){
		$this->total = $this->numero1 - $this->numero2;
	}

	public function multiplicar(){
		$this->total = $this->numero1 * $this->numero2;
	}

	public function dividir(){
		$this->total = $this->numero1 / $this->numero2;
	}

	public function getTotal(){
		return $this->total;
	}


}

 ?>