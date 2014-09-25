<?php
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

	//if routed directly to guess will display the forth quote page.
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(4);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
    }

}