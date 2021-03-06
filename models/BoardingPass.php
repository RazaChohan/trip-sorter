<?php
/**
 * Contains Definition of a particular boarding pass
 * 
 * This file contains class for Boarding Pass containing attributes 
 * and setters for a particular boarding pass.
 *
 * @category TirpSorter/EulerPathProblem
 * @package TripSorter
 * @version v 1.0
 */

/**
 * Boarding Pass class
 *
 * This Class definition for boarding pass attributes and setter. 
 *
 * 
 * @package TripSorter
 * @author Muhammad Raza <razachohan@gmail.com>
 * @category TirpSorter/EulerPathProblem
 * @version v 1.0
 */
class BoardingPass {
	/**
     * @var string 'Starting Point of Boarding pass'
     */
	public $source;
    /**
     * @var string 'Destination Point of Boarding pass'
     */
	public $destination;
    /**
     * @var string 'Type of Transportation mentioned on boarding pass'
     */
    public $transportationType;
    /**
     * @var string 'Contains Transportation ID/Number'
     */
    public $transportationNumber;
    /**
     * @var string 'Information about seat mentioned on boarding pass'
     */
    public $seatInfo;

    /**
     * Constructor setting all attributes
     *
     * @param string $source
     * @param string $destination
     * @param string $transportationType
     * @param string $seatInfo 
     * @param string $transportationNumber 
	 * 
     * @return void
     */
    public function __construct($source, $destination, $transportationType = null, $seatInfo = null, $transportationNumber = null)
    {
        $this->source = $source;
        $this->transportationType = $transportationType;
        $this->destination = $destination;
        $this->seatInfo = $seatInfo;
        $this->transportationNumber = $transportationNumber;
    }
}
