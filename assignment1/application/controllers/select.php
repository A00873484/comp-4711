<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Select extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index($num) {
        $this->data['pagebody'] = 'single';
		$this->data['fillhead']  = 'topFiller';
		$this->data['header'] = 'header';
		$this->data['footer'] = 'footer';
        $source = $this->attractions->get($num);
        htmlspecialchars($source->name, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($source->image, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($source->description, ENT_QUOTES, 'UTF-8');
        
		$this->data['image'] = $source->image;
        $this->data['description'] = $source->description;
		$this->data['name'] = $source->name;
        $this->render();
    }
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */