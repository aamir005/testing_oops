<?php
 
class WordCounter{
	const ASC = 1;
	const DESC = 2;
	private $file_content;
	private $words;
	function __construct($filename){
		$this->file_content = file_get_contents($filename);
		$this->words = array_count_values(str_word_count(strtolower($this->file_content),1));
	}
	
	public function getCount($order){
		if($order == self::ASC){
			asort($this->words);
		}else if($order == self::DESC){
			arsort($this->words);
		}
		
		foreach($this->words as $key => $value){
			echo $key." = ".$value."<br>";
		} 
		
	}
	
}
?>
