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
		$this->load->helper('formfields');
        $this->data['title'] = 'login';
        $this->data['pagebody'] = 'login';
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
		$attraction = $this->session->userdata('attraction');
		
		$this->data['username'] = makeTextField('User Name', 'username', null, 'Type in your User Name');
		$this->data['password'] = makeTextField('Password', 'password', null, "Type in your Password");
		$this->data['submit'] = makeSubmitButton('Submit', 'submit');
		
		
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