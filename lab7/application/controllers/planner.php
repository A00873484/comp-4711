<?php

/**
 * Planner handler
 * 
 * Implement the different Planner handling usecases.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Planner extends Application {

    function __construct() {
        parent::__construct();
        // $this->load->library('simplexml');
    }

    function index() {
    	$this->data['title'] = 'Trip Planner!';
    	$this->data['pagebody'] = 'plantrip';
    	
    	$xml = simplexml_load_file('data/ferryschedule.xml');
    	$xml->formatOutput = true;
    	$days = array();
    	$ports = array();
    	$sailings = array();
    	foreach($xml->days->day as $day) {
    		$this1 = array('day' => $day);
    		$days[] = $this1;
    	}

    	foreach($xml->ports->port as $port) {
    		$this1 = array(
    			'port' => $port,
    			'code' => $port['code']
			);
    		$ports[] = $this1;
    	}

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
    	// print_r($sailings);

    	$this->data['days'] = $days;
    	$this->data['ports'] = $ports;
    	$this->data['sailings'] = $sailings;
    	$this->render();
    }
}