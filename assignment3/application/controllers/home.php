<?php

/**
 * Our homepage. Show a Slide Show and a list of the featured activitys. Clicking on one should show The Specific Activity information.
 * Our ProjectInfo model has been autoloaded, because we use it everywhere.
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
		$this->data['header'] = 'header';
		if($this->session->userdata('userId')){
			$this->data['loginName'] = 'logout';
			$this->data['login'] = '/userlogin/logout';
		}else{
			$this->data['loginName'] = 'login';
			$this->data['login'] = '/userlogin';
		}
		$this->data['fillhead']  = 'topSlider';
        $this->data['pagebody'] = 'homepage';
		$this->data['footer'] = 'footer';
        // build the list of activities, to display on the homepage
        $source = $this->attractions->all();
        $this->data['firstimage'] = "MountainSmoke.jpg";
        $this->data['secondimage'] = "OldBuilding.jpg";
        $this->data['thirdimage'] = "SeaShore.jpg";
        $this->data['page1.1'] = "Japan";
        $this->data['page1.2'] = "Land of the rising sun";
        $this->data['page2.1'] = "A mix of ancient and modern";
        $this->data['page2.2'] = "Experience the wonder";
        $this->data['page3.1'] = "Amazing food, culture, and beauty";
        $options = "";
		$featured = array();
        $featured[0] = $source[0];
        $featured[1] = $source[1];
        $featured[2] = $source[2];
        $firstnum = 0;
        $secondnum = 0;
        $thirdnum = 0;
        // foreach ($source as $record) {
        // 	htmlspecialchars($record->timeChanged, ENT_QUOTES, 'UTF-8');
        // 	if($record->timeChanged > $firstnum){
        // 		if($firstnum>$secondnum){
        // 			$second = $first;
        // 			$secondnum = $firstnum;
        // 		}
        // 		else if($firstnum>$thirdnum){
        // 			$third = $first;
        // 			$thirdnum = $firstnum;
        // 		}
        // 		$first = $record;
        // 		$firstnum = $record->timeChanged;
        // 	}
        // 	else if($record->timeChanged > $secondnum){
        // 		if($second>$third){
        // 			$third = $second;
        // 			$third = $second;
        // 		}
        // 		$second = $record;
        // 		$secondnum = $record->timeChanged;
        // 	}
        // 	else if($record->timeChanged > $thirdnum){
        // 		$third = $record;
        // 		$thirdnum = $record->timeChanged;
        // 	}
        // }
		for($i = 0; $i < 3; $i++){
			htmlspecialchars($featured[$i]->name, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($featured[$i]->description, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($featured[$i]->category, ENT_QUOTES, 'UTF-8');
			$xmlDoc = new DOMDocument();
			$xmlDoc->loadXML($featured[$i]->description);
			$x = $xmlDoc->documentElement;
			foreach ($x->childNodes AS $item)
			{
				if($item->nodeName == 'image1')
					$featured[$i]->image = $item->nodeValue;
				else if($item->nodeName == 'where')
					$featured[$i]->where = $item->nodeValue; 
			}
			$options .= $this->parser->parse('attraction', $featured[$i], true);
        }
		
        $this->data['fill'] = $options;
        $this->render();
    }
	
	function explore(){
		$this->data['pagebody'] = 'exploreview';    // this is the view we want shown
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
        $source = $this->attractions->all();
        $options = array();
		$count = 0;
        /*foreach ($source as $record) {
			if($count != 3 ){
				$count++;
				$options[] = array('name' => $record['name'], 'image' => $record['image']
				, 'href' => $record['where'], 'id' =>$record['id'], 'category'=>(string)$record['category']);
			}
        }*/
        $this->data['options'] = $options;
        $this->render();
	}

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */