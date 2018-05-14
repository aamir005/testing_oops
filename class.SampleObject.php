<?php 
class SampleObject{
	public $var1;
	private $var2;
	protected $var3;
	static $var4;
	public function __construct(){
	 $this->var1 = "hari";
	 $this->var2 = "shyam";
	 $this->var3 = "Ravi";
	 self::$var4 = "Jadeja";
	}
}
?>
