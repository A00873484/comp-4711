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

	//Displays all of the items without edit options.
    
    function index() {
		$this->data['title'] = 'Jim\'s Joint Administration!';
        $this->data['pagebody'] = 'admin/show_menu';
		if($this->session->userdata('userId')){
			$this->data['function'] = 'logout';
			$this->data['functionlink'] = '/userlogin/logout';
		}else{
			$this->data['function'] = 'login';
			$this->data['functionlink'] = '/userlogin';
		}
		
        // Get all the completed orders
        $menuitems = $this->menu->all();

        // Build a multi-dimensional array for reporting
        $items = array();
        foreach ($menuitems as $item) {
            $this1 = array(
                'code' => $item->code,
                'name' => $item->name,
                'description' => $item->description,
                'picture' => $item->picture
            );
            $items[] = $this1;
        }

        // and pass these on to the view
        $this->data['items'] = $items;
        
        $this->render();
	
    }
	
	function orders(){
        $this->data['title'] = 'Jim\'s Joint!';
        $this->data['pagebody'] = 'welcome';
		if($this->session->userdata('userId')){
			$this->data['function'] = 'logout';
			$this->data['functionlink'] = '/userlogin/logout';
		}else{
			$this->data['function'] = 'login';
			$this->data['functionlink'] = '/userlogin';
		}
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