<?php 
class ObjectInArrayFormat implements ArrayAccess{
	private $users;
	
	public function __construct(){
		$users = array();
	}
	public function offsetExists($key){
		return isset($this->users[$key]);
	}
	public function offsetGet($key){
		return $this->users[$key];
	}
	public function offsetSet($key,$value){
		$this->users[$key]= $value;
	}
	public function offsetUnset($key){
		unset($this->users[$key]);
	}
}
?>
