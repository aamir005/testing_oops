<?php 
error_reporting(E_ALL - E_WARNING);
class Overloader{

public function __call($method,$arguments){
	 $arg_values='';
   echo "you call method <b>\"{$method}\"</b> with arguments : ";
    //print_r($arguments);
	foreach($arguments as $values){
		$arg_values .= $values.',';
	}
	$arg_values = rtrim($arg_values,',');
	echo $arg_values;
    echo "<br>";	
 }
 function connect($m){
	 if($m !=1)throw new Exception("Value should be one");
 }
}
?>
