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
        
    }
	function login($username, $password){
		$this->users->get();
	}
	
	function submit(){
		$key  $_POST['userid'];
		$password = md5($_POST['password']);
		$user = $this->users->get($key);
		if ($password == (string) $user->password){
			$this->session->set_userdata('id', $key);
			$this->session->set_userdata('name', $user->name);
			$this->session->set_userdata('role', $user->role);
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('/');
	}

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */