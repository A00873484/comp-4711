<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Planner extends Application {

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
    function code($num){
	
	}
	
}
