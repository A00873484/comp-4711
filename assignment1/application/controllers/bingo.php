<?php
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
	//default displays the fifth quote page.
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(5);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
    }

	//displays the sixth quote page when called
	function wisdom() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(6);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
    }
}