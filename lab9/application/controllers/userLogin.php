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
    	// session_start();
		parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

	
	//loads the login view
    function index() {
        $this->data['title'] = 'login';
        $this->data['pagebody'] = 'login';
		if($this->session->userdata('userId')){
			$this->data['function'] = 'logout';
			$this->data['functionlink'] = '/userlogin/logout';
		}else{
			$this->data['function'] = 'login';
			$this->data['functionlink'] = '/userlogin';
		}
		$this->render();
    }
	
	//checks to see if the username and password are valid and adds the users info to the session if the login was valid, 
	//if it wasnt valid then it will display an error message. 
	function submit(){
		$key = $_POST['username'];
		$password = md5($_POST['password']);
		$user = $this->users->get($key);
		if($user){
			if ($password == (string)$user->password){
				$this->session->set_userdata('userId', $key);
				$this->session->set_userdata('userName', $user->name);
				$this->session->set_userdata('userRole', $user->role);
				$this->session->sess_update();
				redirect('/');
			}
			else{
				$this->errors['login'] = 'Invalid Username or Password';
				$this->index();
			}
		}
		else{
			$this->errors['login'] = 'Invalid Username or Password';
			$this->index();
		}		
	}
	
	//removes the added data from the session then redirects back to the homepage.
	function logout(){
		$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('/');
	}

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */