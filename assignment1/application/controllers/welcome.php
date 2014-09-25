<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
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
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }
	
	//displays the second quote page
	function shucks(){
		$this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(2);
		$this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
        $this->render();
	}

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */