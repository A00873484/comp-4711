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
		$this->data['fillhead']  = 'topSlider';
        $this->data['pagebody'] = 'homepage';
		$this->data['footer'] = 'footer';
        // build the list of activities, to display on the homepage
        $source = $this->attractions->all();
        $this->data['image'] = "MountainSmoke.jpg";
        $this->data['image2'] = "OldBuilding.jpg";
        $this->data['image3'] = "SeaShore.jpg";
        $this->data['page1.1'] = "Japan";
        $this->data['page1.2'] = "Land of the rising sun";
        $this->data['page2.1'] = "A mix of ancient and modern";
        $this->data['page2.2'] = "Experience the wonder";
        $this->data['page3.1'] = "Amazing food, culture, and beauty";
        $options = "";
        $first = $source[0];
        $second = $source[1];
        $third = $source[2];
        $firstnum = 0;
        $secondnum = 0;
        $thirdnum = 0;
        foreach ($source as $record) {
        	htmlspecialchars($record->timeChanged, ENT_QUOTES, 'UTF-8');
        	if($record->timeChanged > $firstnum){
        		$first = $record;
        		if($firstnum>$secondnum)
        			$second = $first;
        		else if($firstnum>$thirdnum)
        			$third = $first;
        	}
        	else if($record->timeChanged > $secondnum){
        		$second = $record;
        		if($seond>$third)
        			$third = $second;
        	}
        	else if($record->timeChanged > $thirdnum)
        		$third = $record;
        }
		htmlspecialchars($first->name, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($first->image, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($first->where, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($first->category, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($second->name, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($second->image, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($second->where, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($second->category, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($third->name, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($third->image, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($third->where, ENT_QUOTES, 'UTF-8');
        htmlspecialchars($third->category, ENT_QUOTES, 'UTF-8');
        $options .= $this->parser->parse('homepage2', $first, true);
        $options .= $this->parser->parse('homepage2', $second, true);
        $options .= $this->parser->parse('homepage2', $third, true);
		 			
				
			
        
		
        $this->data['fill'] = $options;
        $this->render();
    }
	
	function explore(){
		$this->data['pagebody'] = 'exploreview';    // this is the view we want shown
		$this->data['fillhead']  = 'topFiller';
		$this->data['header'] = 'header';
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