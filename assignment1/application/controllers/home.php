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
  //       $options = array();
		// $count = 0;
  //       foreach ($source as $record) {
		// 	if($count < 6 && $record['featured'] == 'Y'){
		// 		$count++;
		// 		$options[] = array('name' => $record['name'], 'image' => $record['image']
		// 		, 'href' => $record['where'], 'id' =>$record['id'], 'category'=>(string)$record['category']);
		// 	}
			
  //       }
		// foreach ($source as $record) {
		// 	if($count < 6 && $record['featured'] == 'N'){
		// 		$count++;
		// 		$options[] = array('name' => $record['name'], 'image' => $record['image']
		// 		, 'href' => $record['where'], 'id' =>$record['id'], 'category'=>(string)$record['category']);
		// 	}
				
		// }
  //       $this->data['options'] = $options;
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