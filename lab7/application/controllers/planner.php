<?php

include 'C:\xampp\htdocs\comp-4711\lab5\application\helpers\formfields_helper.php';

/**
 * Admin handler
 * 
 * Implement the different Admin handling usecases.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Planner extends Application {

    function __construct() {
        parent::__construct();
    }
	
	function index() {
		$this->data['title'] = 'Ferry Travel Planner';
        $this->data['pagebody'] = 'input';
		
		$this->menu;
	}
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */