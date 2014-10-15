<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class About extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'aboutview';
        $source = $this->quotes->getData(1);
		$this->data['image'] = $source['image'];
        $this->data['description'] = "a website we have made for a webdev assignment";
		$this->data['name'] = "About";
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */