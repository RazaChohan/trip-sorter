<?php
/**
 * Interface for EulerPath Class
 * 
 * This file contains the interface for EulerPath class and its function signatures that needs to 
 * be implemented in EulerPath class.
 *
 * @category TirpSorter/EulerPathProblem
 * @package TripSorter
 * @version v 1.0
 */
interface IEulerPath {
	/**
     * Finding Euler path by sorting boarding passes in right order
     *
     * @return void
     */
	public function findEulerPath();
}