<?php
include 'Autoloader.php';
/**
 * Contains run function call for autoloader class
 * 
 * This file provides an interface to start the whole system.
 *
 * @category TirpSorter/EulerPathProblem
 * @package TripSorter
 * @version v 1.0
 */
// Run Autoloader
Autoloader::run();
//Boarding Passes Data
$tourObj = new Tour();
//Euler Path Class Object with boarding Passes
$eulerPath = new EulerPath($tourObj);
//Print Sorted Tour Boarding Passes
$tourObj->printTour();
