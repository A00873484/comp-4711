<?php

/**
 * Data access wrapper for "menu" table.
 *
 * @author jim
 */
class Model extends  MY_Model {
    // constructor
    function __construct() {
        parent::__construct();
		$this->data['title'] = 'Trip Planner!';
    	$this->data['pagebody'] = 'plantrip';
    	
    	$xml = simplexml_load_file('data/ferryschedule.xml');
    	$xml->formatOutput = true;
    	
    	// print_r($sailings);

    	//$this->data['days'] = $days;
    	//$this->data['ports'] = $ports;
    	//$this->data['sailings'] = $sailings;
    	//$this->render();
    }
	function getLocations(){
		//$days = array();
    	$ports = array();
    	
    	//foreach($xml->days->day as $day) {
    	//	$this1 = array('day' => $day);
    	//	$days[] = $this1;
    	//}

    	foreach($xml->ports->port as $port) {
    		$this1 = array(
    			'port' => $port,
    			'code' => $port['code']
			);
    		$ports[] = $this1;
    	}
		print_r($ports);
	}
	
	function getInstructions($from, $to){
		$sailings = array();
		foreach($xml->sailing as $sailing) {
    		$this1 = array(
    			'origin' => $sailing['origin'],
    			'destination' => $sailing['destination'],
    			'days' => $sailing['days'],
    			'depart' => $sailing['depart'],
    			'arrive' => $sailing['arrive'],
    			'stops' => array()
    		);
    		foreach($sailing->stop as $stop) {
    			$this2 = array(
    				'port' => $stop['port'],
    				'portarrive' => $stop['arrive'],
    				'portdepart' => $stop['depart']
    			);
    			$this1['stops'][] = $this2;
    			
    		}
    		$sailings[] = $this1;
    	}
	}
}
