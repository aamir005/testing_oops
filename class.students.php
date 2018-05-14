<?php 

class Student{
 private $properties = array();
 public function __set($property,$value){
	 $this->properties[$property] = "The value of {$property} is : ".$value;
 }
 public function __get($property){
	 return $this->properties[$property];
 }
}

?>
