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
    /*
     * Show all available port for the ferry.
     */
    function index() {
        $this->data['title'] = "Available Ports";
        $this->data['pagebody'] = "show_ports";

        $ports = $this->schedule->retrieve_ports();
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

        $departures = $this->schedule->retrieve_sailings($source, $destination);
        if (empty($departures)) {
            $this->errors[] = "From " + $source + " to " + $destination + "\n" + "Sorry, but you can't get there from here.";
            redirect("/");
        } else {
            $temp = "";
            foreach ($departures as $row) {
                $temp .= $this->parser->parse('departures', $row, true);
            }
            $this->data['departures'] = $temp;
        }
        $this->render();
    }

}
