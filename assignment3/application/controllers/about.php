<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class About extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'aboutview';
		$this->data['fillhead']  = 'topFiller';
		$this->data['header'] = 'header';
		if($this->session->userdata('userId')){
			$this->data['loginName'] = 'logout';
			$this->data['login'] = '/userlogin/logout';
		}else{
			$this->data['loginName'] = 'login';
			$this->data['login'] = '/userlogin';
		}
		$this->data['footer'] = 'footer';
		$this->data['image'] = 'mount-fuji-sunset2.jpg';
		$this->data['name'] = "About";
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */