<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Explore extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'exploreview';    // this is the view we want shown
        // build the list of options, to pass on to our view
        $source = $this->quotes->all();
        $options = array();
        foreach ($source as $record) {
            $options[] = array('name' => $record['name'], 'image' => $record['image'], 'href' => $record['where']);
        }
        $this->data['options'] = $options;

        $this->render();
    }
	
	function sleep($num){
		$this->data['pagebody'] = 'single';
        $source = $this->quotes->getData($num);
		$this->data['image'] = $source['image'];
        $this->data['description'] = $source['description'];
		$this->data['name'] = $source['name'];
        $this->render();
	}
	
	function eat($num){
		$this->data['pagebody'] = 'single';
        $source = $this->quotes->getData($num);
		$this->data['image'] = $source['image'];
        $this->data['description'] = $source['description'];
		$this->data['name'] = $source['name'];
        $this->render();
	}
	
	function play($num){
		$this->data['pagebody'] = 'single';
        $source = $this->quotes->getData($num);
		$this->data['image'] = $source['image'];
        $this->data['description'] = $source['description'];
		$this->data['name'] = $source['name'];
        $this->render();
	}
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */