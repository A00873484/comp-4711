<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Schedules extends Application {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->library('xmlrpc');
		$this->load->library('xmlrpcs');
		$config['functions']['get_ports'] = array('function' => 'schedules.get_ports');
        $config['functions']['get_trip'] = array('function' => 'schedules.get_trip');
        $config['object'] = $this;
        $this->xmlrpcs->initialize($config);
        $this->xmlrpcs->serve();
    }
    
	/*
     * Show all available port for the ferry.
     */
    function get_ports($request) {
		$parameters = $request->output_parameters();
		$ports = $this->schedule->retrieve_ports();
		$response = array();
		foreach ($ports as $port)
			$response[] = array($port, 'struct');
		$response = array($response, 'struct');
        return $this->xmlrpc->send_response($response);
    }
    
	/*
	 * Show an individual trip.
	 */
    function get_trip($request) {
		$parameters = $request->output_parameters();
        $ports = $this->schedule->retrieve_sailings($parameters);
		$response = array();
		//foreach ($ports as $port)
			//$response[] = array($port, 'struct');
		$response = array($response, 'struct');
        return $this->xmlrpc->send_response($response);
    }
	
}
