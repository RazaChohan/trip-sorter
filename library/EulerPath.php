<?php
/**
 * Contains funtionality related to finding Euler Path between different edges of points
 * 
 * This file provides an class.
 *
 * @category TirpSorter/EulerPathProblem
 * @package TripSorter
 * @version v 1.0
 */
class EulerPath implements IEulerPath {
	/**
     * @var tour 'contains tour object'
     */
    public $tour;
    /**
     * Constructor setting  attributes
     *
     * @param tour objects $tour
     * 
     * @return void
     */
	public function __construct($tour)
	{
		$this->tour = $tour;	
		if(!empty($this->tour->boardingPasses))
		{
			$this->findEulerPath();	
		}
	}
	/**
     * Finding Euler path by sorting boarding passes in right order
     *
     * @return void
     */
	public function findEulerPath()
	{
		$sortedBoardingPasses = [];
		while (true) {
            foreach ($this->tour->boardingPasses as $key => $boardingPass) {
                if ($boardingPass->source == $this->tour->currentLocation) {
                    array_push($sortedBoardingPasses, $boardingPass);
                    $this->tour->currentLocation = $boardingPass->destination;
                    $this->tour->deleteBoardingPassWithKey($key);
                }
            }
            if (($this->tour->tourEndingPoint == $this->tour->currentLocation) || (empty($this->tour->boardingPasses))) {
            	$this->tour->setSortedBoardingPasses($sortedBoardingPasses);
                return;
            }
        }
    }
}
