<?php  
/*
*Class to show the use of array to  object 
*/

class ArrayToObject extends ArrayObject{
	
	public function __get($key){
		return $this[$key];
	}
	public function __set($key,$value){
		$this[$key]=$value;
	}
	
}

?>
