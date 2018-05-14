<?php
class Iterator_test{
	public $email;
	public $valid_email;
	private $test_email;
	public function __construct($email,$valid_email){
		if(!$email && !$valid_email){
		throw new Exception("Please provide email and valid email during object creation");	
		}else{
		$this->email= $email;
		$this->valid_email = $valid_email;
		}
	}
}

?>
