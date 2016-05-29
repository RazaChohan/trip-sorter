<?php
/**
 * Contains Definition of a Tour class
 * 
 * This file contains data class containing array of boarding class objects
 *
 * @category TirpSorter/EulerPathProblem
 * @package TripSorter
 * @version v 1.0
 */
class Tour {
	/**
     * @var array of Boarding pass 'Contains all boarding pass of a particular tour'
     */
	public $boardingPasses;
	/**
     * @var array of Destination 'Contains all Destinations of boarding passes'
     */
	public $destinations;
	/**
     * @var array of Sources 'Contains all Sources of boarding passes'
     */
	public $sources;
	/**
     * @var string 'Contains Starting point of string'
     */
	public $tourStartingPoint;
	/**
     * @var string 'Contains Ending point of string'
     */
	public $tourEndingPoint;
	/**
     * @var string 'Contains Ending point of string'
     */
	public $currentLocation;
    /**
     * @var array of boarding passes 'Contains boarding passes objects in sorted order'
     */
    public $sortedTourBoardingPasses;
	/**
     * Constructor setting all attributes
     *
     * @param string $start
     * @param string $destination
     * @param string $transportation
     * @param string $seat 
	 * 
     * @return void
     */
    public function __construct()
	{
		// new BoardingPass(source, Destination, Transportation Type, Seat Info, Transportation Number)
		$this->boardingPasses = [ 	new BoardingPass('Karachi', 'Islamabad', 'plane', 'B-22', 'PK 228'),
					 				new BoardingPass('Islamabad', 'Lahore', 'bus', 'b', 'LXZ 20012'),  
                                    new BoardingPass('Gilgit', 'Gujranwala', 'plan', 'A-12', 'PK 776'),  
                                    new BoardingPass('Lahore', 'Gilgit', 'train', 'NN-32', 'Night Coach'),  
					 				new BoardingPass('Gujranwala', 'Rahim Yar Khan', 'bus', 'C-19', 'LXJ 3663'),  
						  		]; 
		$this->sources = [];
		$this->destinations = [];	
        $this->sortedTourBoardingPasses = [];			  		
		// Get all sources and and destinations of tour
		if(!empty($this->boardingPasses))
		{				  
			$this->getAllSourcesAndDestinations();
			$this->getStartingAndEndingPoints();				  
		}
	}
	/**
     * Sets the destinations and sources arrays , by traversing the $data/boarding passes arrays
     *
     * @return void
     */
	public function getAllSourcesAndDestinations()
	{
		foreach ($this->boardingPasses as $key => $boardingPass) {
            array_push($this->sources, $boardingPass->source);
            array_push($this->destinations, $boardingPass->destination);
        }	
    }
	/**
     * Get Starting and ending points of the tour
     *
     * @return void
     */
	public function getStartingAndEndingPoints()
	{
		// Get Tour Ending Point
		foreach ($this->destinations as $location) {
            if (!in_array($location, $this->sources)) {
                $this->tourEndingPoint = $location;
            }
        }
        // Get Tour Starting Point	
        foreach ($this->sources as $location) {
            if (!in_array($location, $this->destinations)) {
                $this->tourStartingPoint = $location;
            }
        }	

        $this->currentLocation = $this->tourStartingPoint;
	}	
    /**
     * Sets Sorted boarding passes array
     *
     * @return void
     */
    public function setSortedBoardingPasses($sortedBoardingPasses)
    {
        $this->sortedTourBoardingPasses = $sortedBoardingPasses;
    }
    /**
     * outputs the sorted boarding pass
     *
     * @return void
     */
    public function printTour()
    {
        echo "".PHP_EOL;
        echo "-------------------------------------------------".PHP_EOL;
        echo "---------- Welcome to 'Trip Sorter' -------------".PHP_EOL;
        echo "-------------------------------------------------".PHP_EOL;
        $counter = 1;
        foreach ($this->sortedTourBoardingPasses as $key => $val) {
            echo "(" . $counter . ")" . " " . "Take " . $val->transportationType . " from " . 
                 ucfirst($val->source) . " to " . ucfirst($val->destination) .
                ". Your seat number is: " . $val->seatInfo . PHP_EOL;
            $counter++;    
        }    
    }
     /**
     * removes boarding pass from array of boarding passes using the passed key
     *
     * @param int 'Key for which boarding pass needs to be deleted'
     * @return void
     */
    public function deleteBoardingPassWithKey($key)
    {
        unset($this->boardingPasses[$key]);   
    }
    			
}