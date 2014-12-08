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
		if($this->session->userdata('userId')){
			$this->data['loginName'] = 'logout';
			$this->data['login'] = '/userlogin/logout';
		}else{
			$this->data['loginName'] = 'login';
			$this->data['login'] = '/userlogin';
		}
		$this->data['footer'] = 'footer';
        $source = $this->attractions->get($num);
        htmlspecialchars($source->name, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($source->description, ENT_QUOTES, 'UTF-8');

        $this->data['page1.1'] = "";
        $this->data['page1.2'] = "";
        $this->data['page2.1'] = "";
        $this->data['page2.2'] = "";
        $this->data['page3.1'] = "";
        $xmlDoc = new DOMDocument();
		$xmlDoc->loadXML($source->description);
		$x = $xmlDoc->documentElement;
		foreach ($x->childNodes AS $item)
		{
			if($item->nodeName == 'image1')
				$source->image = $item->nodeValue;
			else if($item->nodeName == 'image2')
				$source->image2 = $item->nodeValue;
			else if($item->nodeName == 'image3')
				$source->image3 = $item->nodeValue;
			else if($item->nodeName == 'description')
				$source->description = $item->nodeValue; 
		}
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