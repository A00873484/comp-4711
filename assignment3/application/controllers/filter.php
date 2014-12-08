<?php

/**
 * Our homepage. Show a Slide Show and a list of the featured activitys. Clicking on one should show The Specific Activity information.
 * Our ProjectInfo model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Filter extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
		$this->load->helper('formfields');
		$this->data['pagebody'] = 'filter';    // this is the view we want shown
		$this->data['fillhead'] = 'topFiller';
		$this->data['header'] = 'header';
		if($this->session->userdata('userId')){
			$this->data['loginName'] = 'logout';
			$this->data['login'] = '/userlogin/logout';
		}else{
			$this->data['loginName'] = 'login';
			$this->data['login'] = '/userlogin';
		}
		$this->data['footer'] = 'footer';
		
		$priceOptions['none'] = 'none';
		$priceOptions['cheap'] = 'cheap';
		$priceOptions['moderate'] = 'moderate';
		$priceOptions['expensive'] = 'expensive';
		
		$targetOptions['none'] = 'none';
		$targetOptions['family'] = 'family';
		$targetOptions['adventurous'] = 'adventurous';
		$targetOptions['relaxed'] = 'relaxed';
		$attraction = $this->session->userdata('item');
		//print_r($this->session->userdata);
		//print_r($_POST);
			
		if($attraction){
			$this->data['price'] = makeComboField('Price Range', 'price_range', $attraction['price_range'], $priceOptions, $explain = "Filters by Category", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['audience'] = makeComboField('Target Audience', 'target_audience', $attraction['target_audience'], $targetOptions, $explain = "Filters by Category", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['submit'] = makeSubmitButton('Submit', 'submit');
			// build the list of options, to pass on to our view
			$this->filter($attraction['price_range'], $attraction['target_audience'], 'play');
			$this->filter($attraction['price_range'], $attraction['target_audience'], 'eat');
			$this->filter($attraction['price_range'], $attraction['target_audience'], 'sleep');
		}
		else{
			$price = makeComboField('Price Range', 'price_range', $priceOptions['none'], $priceOptions, $explain = "Filters by Category", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['price'] = $price;
			$audience = makeComboField('Target Audience', 'target_audience', $targetOptions['none'], $targetOptions, $explain = "Filters by Category", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['audience'] = $audience;
			$this->data['submit'] = makeSubmitButton('Submit', 'submit');
				
			// build the list of options, to pass on to our view
			$this->filter($attraction['price_range'], $attraction['target_audience'], 'play');
			$this->filter($attraction['price_range'], $attraction['target_audience'], 'eat');
			$this->filter($attraction['price_range'], $attraction['target_audience'], 'sleep');
		}
		$this->render();
    }
	
	function filter($price, $audience, $string){
		$source = $this->attractions->some('category', $string);
		$temp = array();
		foreach($source as $anItem){
			if(($price == $anItem->price_range || $price == 'none') && ($audience == $anItem->target_audience || $audience == 'none')){
				$temp[] = array(
					'id' => $anItem->id,
					'name' => $anItem->name,
					'category' => $anItem->category,
					'description' => $anItem->description,
					'price_range' => $anItem->price_range,
					'target_audience' => $anItem->target_audience
				);
			}	
		}
		$this->data[$string] = $this->arrayOfButtonPictures($temp);
		return $temp;
	}
	
	function submit(){
		$edited = $_POST;
		$this->session->unset_userdata('item');
		$this->session->set_userdata('item', $edited);
		$item = $this->session->userdata('item');
		// print_r($this->session->unset_userdata('item'));
		$this->index();
	}
	
	function arrayOfButtonPictures($source){
		$options = "";
        foreach ($source as $record) {
            htmlspecialchars($record['name'], ENT_QUOTES, 'UTF-8');
            htmlspecialchars($record['category'], ENT_QUOTES, 'UTF-8');
			$xmlDoc = new DOMDocument();
			$xmlDoc->loadXML($record['description']);
			$x = $xmlDoc->documentElement;
			foreach ($x->childNodes AS $item)
			{
				if($item->nodeName == 'image1'){
					$record['image'] = $item->nodeValue;
				}else if($item->nodeName == 'where'){
					$record['where'] = $item->nodeValue;
				}
			}
            $options .= $this->parser->parse('filter2', $record, true);
        }
		return $options;
	}
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */