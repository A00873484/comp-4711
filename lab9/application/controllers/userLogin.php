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
class Userlogin extends Application {

    function __construct() {
		parent::__construct();
		
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'login';
        $this->data['pagebody'] = 'login';
		$this->data['name'] = 'login';
		$this->data['link'] = '/userlogin';
		$this->render();
		print_r($this->session->userdata);
    }
	function login($username, $password){
		$this->users->get();
	}
	
	function submit(){
		session_start();
		$key = $_POST['username'];
		$password = md5($_POST['password']);
		$user = $this->users->get($key);
		if ($password == (string)$user->password){
			$this->session->set_userdata('userID', $key);
			$this->session->set_userdata('userName', $user->name);
			$this->session->set_userdata('userRole', $user->role);
			$this->session->sess_update();
			print_r($this->session->all_userdata());
			redirect('/userlogin');
		}
		else{
			redirect('/userlogin');
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