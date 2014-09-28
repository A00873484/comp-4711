<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Home extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('name' => $record['name'], 'image' => $record['image'], 'href' => $record['where']);
        }
        //$this->data['authors'] = $authors;

        $this->render();
    }
	
	function sleep($num){
		$this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($num);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
	}
	
	function eat($num){
		$this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($num);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
	}
	
	function play($num){
		$this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($num);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
	}
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */