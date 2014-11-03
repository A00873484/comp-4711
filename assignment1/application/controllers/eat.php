<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Eat extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->load->helper('formfields');
		$this->data['pagebody'] = 'eat';    // this is the view we want shown
		$this->data['fillhead'] = 'topFiller';
		$this->data['header'] = 'header';
		$this->data['footer'] = 'footer';
        // build the list of options, to pass on to our view
        $source = $this->attractions->some('category', 'eat');
        $options = "";
        foreach ($source as $record) {
            htmlspecialchars($record->name, ENT_QUOTES, 'UTF-8');
            htmlspecialchars($record->image, ENT_QUOTES, 'UTF-8');
            htmlspecialchars($record->where, ENT_QUOTES, 'UTF-8');
            htmlspecialchars($record->category, ENT_QUOTES, 'UTF-8');
            $options .= $this->parser->parse('attraction', $record, true);
        }
        $this->data['fill'] = $options;
        $this->render();
    }
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */