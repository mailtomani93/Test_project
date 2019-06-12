<?php

/**
 * 
 */
class a 
{
	var $a,$b,$c;
	function __construct()
	{
		echo "Test Class";
		//return $this->a="Mani";
	}

	function d(){
			echo "Kandan";			
		}

	 function b($a)
	{

		echo "Mani";

	return $this->b=$a;

		//$this->d();

	}

	

	public function c()
	{

		echo $this->b;
	//return $this->b="Kandan";	
	}

}

$a=new a;
$b=$a->b('fdczxcxc');

$c=$a->b('dftfh');

$a->c();
print_r($a);

$a=a::b('000')->c();

?>