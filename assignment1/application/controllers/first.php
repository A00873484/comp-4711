<?php
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class first extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

	// default displays the first quote.
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
    }
	
	//displays the first quote page when called.
	function zzz(){
		$this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(1);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
	}
	
	//displays the quote page of the number passed in when called.
	function gimme($number){
		$this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($number);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
	}

}