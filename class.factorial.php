<?php

class Factorial{
	private $number;
	private $result =1;
	function __construct($number){
		 $this->number = $number;
		 for($i=2;$i<=$number;$i++){
			 $this->result *=$i;
		 }
	 }
	public function getFactorial(){
		echo "Factorial of {$this->number} is {$this->result}.";
	}
	
	function __destruct(){
		echo "<br> object Destroyed";
	}
	
} 
?>
