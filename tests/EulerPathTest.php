<?php
/**
 * Contains Test Cases for Euler Path class
 * 
 *
 * @category TirpSorter/EulerPathProblem
 * @package TripSorter/Test
 * @version v 1.0
 */
 require_once('./library/IEulerPath.php');
 require_once('./library/EulerPath.php');
/**
 * Contains Definition of a EulerPath Test Class
 *
 * @category TirpSorter/EulerPathProblem
 * @package TripSorter/Test
 * @version v 1.0
 */
class EulerPathTest extends PHPUnit_Framework_TestCase {
	/**
     * @var tour object
     */
	public $tour;
	/**
     * @var euler path object
     */
	public $eulerPath;
	/**
   	 * function used to set the euler path test class attributes
   	 *
   	 * @return void
     */
	public function setUp()
	{
		$this->tour = new Tour();
		$boardingPasses = [   new BoardingPass('Karachi', 'Islamabad', 'plane', 'B-22', 'PK 228'),
                              new BoardingPass('Islamabad', 'Lahore', 'bus', 'b', 'LXZ 20012'),  
                              new BoardingPass('Gilgit', 'Gujranwala', 'plan', 'A-12', 'PK 776'),  
                              new BoardingPass('Lahore', 'Gilgit', 'train', 'NN-32', 'Night Coach'),  
                              new BoardingPass('Gujranwala', 'Rahim Yar Khan', 'bus', 'C-19', 'LXJ 3663'),  
                           ]; 
        
		$this->tour->overrideBoardingPasses($boardingPasses);
		$this->eulerPath = new EulerPath($this->tour);
	}
	/**
   	 * function used to test Sorted boarding passes
   	 *
   	 * @return void
     */
	public function testSortedBoardingPasses()
	{
		$testStatus = true;
  		$sortedBoardingPasses = [
									new BoardingPass('Karachi', 'Islamabad', 'plane', 'B-22', 'PK 228'),
                              		new BoardingPass('Islamabad', 'Lahore', 'bus', 'b', 'LXZ 20012'),  
                             		new BoardingPass('Lahore', 'Gilgit', 'train', 'NN-32', 'Night Coach'),  
	                                new BoardingPass('Gilgit', 'Gujranwala', 'plan', 'A-12', 'PK 776'),  
	                                new BoardingPass('Gujranwala', 'Rahim Yar Khan', 'bus', 'C-19', 'LXJ 3663'),  
                       			];
        foreach($this->tour->sortedTourBoardingPasses as $key => $boardingPass)
        {
        	if($boardingPass != $sortedBoardingPasses[$key])
        	{
        		$testStatus = false;
        		break;	
        	}
        }               			
        $this->assertTrue($testStatus);
	}

	
}
