<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Sleep extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'sleep';    // this is the view we want shown
		$this->data['fillhead']  = 'topFiller';
		$this->data['header'] = 'header';
		if($this->session->userdata('userId')){
			$this->data['loginName'] = 'logout';
			$this->data['login'] = '/userlogin/logout';
		}else{
			$this->data['loginName'] = 'login';
			$this->data['login'] = '/userlogin';
		}
		$this->data['footer'] = 'footer';
        // build the list of options, to pass on to our view
        $source = $this->attractions->some('category', 'sleep');
        $options = "";
        foreach ($source as $record) {
            htmlspecialchars($record->name, ENT_QUOTES, 'UTF-8');
            htmlspecialchars($record->category, ENT_QUOTES, 'UTF-8');
			$xmlDoc = new DOMDocument();
			$xmlDoc->loadXML($record->description);
			$x = $xmlDoc->documentElement;
			foreach ($x->childNodes AS $item)
			{
				if($item->nodeName == 'image1'){
					$record->image = $item->nodeValue;
				}else if($item->nodeName == 'where'){
					$record->where = $item->nodeValue;
				} 
			}
            $options .= $this->parser->parse('attraction', $record, true);
        }
        $this->data['fill'] = $options;
        $this->render();
    }
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */