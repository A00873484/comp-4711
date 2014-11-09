<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of schedule
 *
 * @author Danny
 */
class Planner extends Application {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
    }
    
	/*
     * Show all available port for the ferry.
     */
    function get_ports() {
		$response = $this->schedule->retrieve_ports();
        return $this->xmlrpc->send_response($response);
	}
    
	/*
	 * Show an individual trip.
	 */
    function get_trip($source, $destination) {
        return $this->schedule->retrieve_sailings($source, $destination);
    }
	
}
