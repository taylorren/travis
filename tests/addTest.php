<?php

require_once "../src/functions.php";

class addTest extends PHPUnit_Frameword_TestCase
{
   	public function addPassed()
	{
		$this->assertEquals(5, add(2,3));
	}
}

