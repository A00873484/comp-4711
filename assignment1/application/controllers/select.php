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
        htmlspecialchars($source->image2, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($source->image3, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($source->description, ENT_QUOTES, 'UTF-8');

        $this->data['page1.1'] = "";
        $this->data['page1.2'] = "";
        $this->data['page2.1'] = "";
        $this->data['page2.2'] = "";
        $this->data['page3.1'] = "";
        
		$this->data['image'] = $source->image;
        $this->data['firstimage'] = $source->image;
        $this->data['secondimage'] = $source->image2;
        $this->data['thirdimage'] = $source->image3;
        $this->data['description'] = $source->description;
		$this->data['name'] = $source->name;
        $this->render();
    }
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */