<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("RPC_SERVER", "services.local/schedules");
define("RPC_PORT", "80");
 
class Planner extends Application {

    function __construct() {
        parent::__construct();
    }
    /*
     * Show all available port for the ferry.
     */
    function index() {
        $this->data['title'] = "Available Ports";
        $this->data['pagebody'] = "lab7start";

        $ports = $this->get_ports_remotely();
        $this->data['ports'] = $ports;

        $this->render();
    }
    /*
     * Get the input from the promt and get the plan for the user
     */
    function get_ports_code() {
        $source = $this->input->post('from');
        $destination = $this->input->post('to');
        $this->get_plan($source, $destination);
    }
    /*
     * Show the plan for the user with:
     * <ul>
     *  <li>The day of sailing on</li>
     *  <li>Departure time</li>
     *  <li>Arrival time</li>
     *  <li>Stops along the way</li>
     * </ul>
     * @param $source the origin place to leave
     * @param $destination the destination to arrive
     */
    function get_plan($source, $destination) {
        $this->data['title'] = "Your custom travel plan";
        $this->data['pagebody'] = 'show_plan';
		
        $this->data['source'] = $source;
        $this->data['destination'] = $destination;
        $departures = $this->get_trips_remotely($source, $destination);
        if (empty($departures)) {
            $this->errors[] = "From " + $source + " to " + $destination + "\n" + "Sorry, but you can't get there from here.";
            //redirect("/");
        } else {
            $temp = "";
            foreach ($departures as $row) {
                $temp .= $this->parser->parse('departures', $row, true);
            }
            $this->data['departures'] = $temp;
        }
        $this->render();
    }
	
	function get_trips_remotely($source, $dest) {
        $this->load->library('xmlrpc');
        $this->load->library('xmlrpcs');
        $this->xmlrpc->server(RPC_SERVER, RPC_PORT);
		$this->xmlrpc->method('get_trip');
		$request = array($source, $dest);
		$this->xmlrpc->request($request);
		//$this->xmlrpc->set_debug(true);
		if ( ! $this->xmlrpc->send_request())
		{
			echo $this->xmlrpc->display_error();
		}
		else
		{
			return ($this->xmlrpc->display_response());
		}
		$request = array($source, $dest);
		return $this->xmlrpc->request($request);
	}
	
	function get_ports_remotely(){
		$this->load->library('xmlrpc');
		$this->load->library('xmlrpcs');
		$this->xmlrpc->server(RPC_SERVER, RPC_PORT);
		$this->xmlrpc->method('get_ports');
		$request = array();
		$this->xmlrpc->request($request);
		if ( ! $this->xmlrpc->send_request())
		{
			echo $this->xmlrpc->display_error();
		}
		else
		{
			return ($this->xmlrpc->display_response());
		}
	}
	
}
