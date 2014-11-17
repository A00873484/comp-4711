<?php

/**
 * Our homepage.
 * 
 * Present a summary of the completed orders.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
		parent::__construct();
		
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'Jim\'s Joint!';
        $this->data['pagebody'] = 'welcome';
		$this->data['login'] = '_menubar';
		if($this->session->userdata('userID')){
			$this->data['name'] = 'logout';
			$this->data['link'] = '/userlogin/logout';
		}else{
			$this->data['name'] = 'login';
			$this->data['link'] = '/userlogin';
		}
		//print_r($this->session->all_userdata());
        // Get all the completed orders
        $completed = $this->orders->some('status','c');

        // Build a multi-dimensional array for reporting
        $orders = array();
        foreach ($completed as $order) {
            $this1 = array(
                'num' => $order->num,
                'datetime' => $order->date,
                'amount' => $order->total
            );
            $orders[] = $this1;
        }

        // and pass these on to the view
        $this->data['orders'] = $orders;
        
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */