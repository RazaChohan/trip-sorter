<?php

require_once('./models/Tour.php');

class TourTest extends PHPUnit_Framework_TestCase
{
	public $tour;
	public function setUp()
	{
		$tour = new Tour();
	}
	public function testTour()
	{
		$this->assertTrue(true);
	}
}