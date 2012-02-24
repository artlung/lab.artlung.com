<?php

//random password


class PasswordGenerator {

	public static $letters = "2346789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnopqrstuvwxyz";
	public static $length = "8";
	public $letters_array;

	function __construct() {
		$this->letters_array = array();
		
		for($a=0;$a<strlen(self::$letters);$a++) {
			$this->letters_array[] = self::$letters[$a];			
		}
	}


	function make()
	{
		$password = '';
		for($i=0;$i<self::$length ;$i++)
		{
			srand ((float) microtime() * 10000000);
			$password .= $this->letters_array[array_rand($this->letters_array)];			
		}
		return $password;
		
	}
	
	function printOne()
	{
		print $this->make();
	}
	
	function printMany($num){
		for($i=0;$i<$num;$i++) {
			$this->printOne();
			print "\n";			
		}
	}
	


}


$PG = new PasswordGenerator();
$PG->printMany(100);


?>