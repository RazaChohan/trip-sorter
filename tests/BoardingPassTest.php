<?php

require_once('./models/BoardingPass.php');

class BoardingPassTest extends PHPUnit_Framework_TestCase
{
	public $boardingPass;
	public function setUp()
	{
		$boardingPass = new BoardingPass("TestSource", "TestDestination");
	}
  	public function testDataArr()
  	{
    	$data = [];
  	  	$this->assertTrue(is_array($data));
  	}
}