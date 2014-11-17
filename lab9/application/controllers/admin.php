<?php

/**
 * Admin handler
 * 
 * Implement the different Admin handling usecases.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Admin extends Application {

    function __construct() {
        parent::__construct();
		$this->restrict('admin');
    }

	//Displays all of the items with edit options. 
    function list2() {
        $this->data['title'] = 'Jim\'s Joint Administration (view 2)!';
        $this->data['pagebody'] = 'admin/listitem';
		if($this->session->userdata('userId')){
			$this->data['function'] = 'logout';
			$this->data['functionlink'] = '/userlogin/logout';
		}else{
			$this->data['function'] = 'login';
			$this->data['functionlink'] = '/userlogin';
		}
		
        // Get all the completed orders
        $menuitems = $this->menu->all();
        $itemrows = "";
        // Build a multi-dimensional array for reporting
        $items = array();
        foreach ($menuitems as $item) {
            $itemrows .= $this->parser->parse('admin/listitem2', $item, true);
        }

        // and pass these on to the view
        $this->data['themeat'] = $itemrows;
        
        $this->render();
    }

	//Takes in the values in the textboxs and determines if the data inside is valid or not,
	//checks for empty textboxes for name and price and checks to see if price has a number in it.
	function errors2($items){
		$count = 0;
		if(!$items['name']){
			$this->errors['name'] = 'Your Name textbox is empty';
			$count = 1;
		}if(!$items['price']){
			$this->errors['price1'] = 'Your Price textbox is empty';
			$count = 1;
		}else if(!is_numeric($items['price'])){
			$this->errors['price2'] = 'Your Price is Invalid';
			$count = 1;
		}
		return $count == 0 ? false : true;
	}
	
	//First edit function displays the textboxs used to edit the info along with the current information for the item.
    function edit3($code) {
        $this->data['title'] = 'Jim\'s Joint Maintenance!';
        $this->data['pagebody'] = 'admin/edititem';
        if($this->session->userdata('userId')){
			$this->data['function'] = 'logout';
			$this->data['functionlink'] = '/userlogin/logout';
		}else{
			$this->data['function'] = 'login';
			$this->data['functionlink'] = '/userlogin';
		}
		$this->data['code'] = $code;
		$temp = $this->menu->some('code', $code)[0];
		$this->data['name'] = $temp->name;
		$this->data['description'] = $temp->description;
		$this->data['price'] = $temp->price;
		$this->data['num'] = 3;
		if($temp->category == 's'){
			$this->data['category1'] = 'selected';
			$this->data['category2'] = "";
			$this->data['category3'] = "";
		}else if($temp->category == 'm'){
			$this->data['category1'] = "";
			$this->data['category2'] = 'selected';
			$this->data['category3'] = "";
		}else if($temp->category == 'd'){
			$this->data['category1'] = "";
			$this->data['category2'] = "";
			$this->data['category3'] = 'selected';
		}
		$this->data['picture'] = $temp->picture;

        $this->render();
    }
	
	//First post function updates the menu then redirects to the homepage.
    function post3() {
        // Handle edit form
		$edited = $_POST;
		$temp = $this->menu->some('code', $edited['code'])[0];
		$temp->name = $edited['name'];
		$temp->description = $edited['description'];
		$temp->price = $edited['price'];
		$temp->category = $edited['category'];
		$this->menu->update($temp);
		redirect('/');
    }
	
	//Second edit function displays the textboxs and the items current information, if redirected too error messages are displayed along with submited data.  
	function edit4($code) {
        $this->data['title'] = 'Jim\'s Joint Maintenance!';
		$this->data['pagebody'] = 'admin/edititem';
		if($this->session->userdata('userId')){
			$this->data['function'] = 'logout';
			$this->data['functionlink'] = '/userlogin/logout';
		}else{
			$this->data['function'] = 'login';
			$this->data['functionlink'] = '/userlogin';
		}
		$item = $this->session->userdata('item');
		if($item){
			$this->data['code'] = $code;
			$this->data['name'] = $item['name'];
			$this->data['description'] = $item['description'];
			$this->data['price'] = $item['price'];
			$this->data['num'] = 4;
			if($item['category'] == 's'){
				$this->data['category1'] = 'selected';
				$this->data['category2'] = "";
				$this->data['category3'] = "";
			}else if($item['category'] == 'm'){
				$this->data['category1'] = "";
				$this->data['category2'] = 'selected';
				$this->data['category3'] = "";
			}else if($item['category'] == 'd'){
				$this->data['category1'] = "";
				$this->data['category2'] = "";
				$this->data['category3'] = 'selected';
			}
			$this->data['picture'] = $item['picture'];
		}else{
			$this->data['code'] = $code;
			$temp = $this->menu->some('code', $code)[0];
			$this->data['name'] = $temp->name;
			$this->data['description'] = $temp->description;
			$this->data['price'] = $temp->price;			
			$this->data['num'] = 4;
			if($temp->category == 's'){
				$this->data['category1'] = 'selected';
				$this->data['category2'] = "";
				$this->data['category3'] = "";
			}else if($temp->category == 'm'){
				$this->data['category1'] = "";
				$this->data['category2'] = 'selected';
				$this->data['category3'] = "";
			}else if($temp->category == 'd'){
				$this->data['category1'] = "";
				$this->data['category2'] = "";
				$this->data['category3'] = 'selected';
			}
			$this->data['picture'] = $temp->picture;
		}

        $this->render();
    }
	
	//Second post function checks for errors, if none it updates the menu then redirects to the homepage, if errors are found then it redirects to the edit form.
    function post4() {
        // Handle edit form
		$edited = $_POST;
		$temp = $this->menu->some('code', $edited['code'])[0];
		$edited['picture'] = $temp->picture;
		$this->session->unset_userdata('item');
		$this->session->set_userdata('item', $edited);
		$item = $this->session->userdata('item');
		if($this->errors2($item)){				
			$this->edit4($edited['code']);
		}else{
			$temp->name = $edited['name'];
			$temp->description = $edited['description'];
			$temp->price = $edited['price'];
			$temp->category = $edited['category'];
			$this->menu->update($temp);
			redirect('/');
		}
		
    }
	
	//Third edit function displays the textboxs and the items current information useing function calls, if redirected too error messages are displayed along with submited data.  
	function edit5($num) {
		$this->load->helper('form_helper');
        $this->data['title'] = 'Jim\'s Joint Maintenance!';
		$this->data['pagebody'] = 'admin/edit5';
		if($this->session->userdata('userId')){
			$this->data['function'] = 'logout';
			$this->data['functionlink'] = '/userlogin/logout';
		}else{
			$this->data['function'] = 'login';
			$this->data['functionlink'] = '/userlogin';
		}
		$item = $this->session->userdata('item');
		if($item){	
			$this->data['code'] = makeTextField('Code', 'code', $num, $explain = "The Item ID (can't be changed)", $maxlen = 10, $size = 25, $disabled = true);
			$this->data['name'] = makeTextField('Name', 'name', $item['name'], 'Short name for this menu item, suited to customer ordering');
			$this->data['description'] = makeTextArea('Description', 'description', $item['description'], "The description of the item, anything is valid");
			$this->data['price'] = makeTextField('Price', 'price', $item['price'], 'Price of the item, make it subtible to the item');
			
			$options[0] = 's';
			$options[1] = 'm';
			$options[2] = 'd';
			$this->data['category'] = makeComboField('Category', 'category', $item['category'], $options, $explain = "Categorys are Sweet, Meat, and Drink. Select Accordingly", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['picture'] = showImage('Picture', $item['picture'], $width = 120, $height = 80);
			$this->data['submit'] = makeSubmitButton('Submit', 'submit');
		}else{
			$temp = $this->menu->get($num);
			$this->data['code'] = makeTextField('Code', 'code', $temp->code, $explain = "The Item ID (can't be changed)", $maxlen = 10, $size = 25, $disabled = true);	
			$this->data['name'] = makeTextField('Name', 'name', $temp->name, 'Short name for this menu item, suited to customer ordering');
			$this->data['description'] = makeTextArea('Description', 'description', $temp->description, "The description of the item, anything is valid");
			$this->data['price'] = makeTextField('Price', 'price', $temp->price, 'Price of the item, make it subtible to the item');			
			
			$options[0] = 's';
			$options[1] = 'm';
			$options[2] = 'd';
			$this->data['category'] = makeComboField('Category', 'category', $temp->category, $options, $explain = "Categorys are Sweet, Meat, and Drink. Select Accordingly", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['picture'] = showImage('picture', $temp->picture, $width = 120, $height = 80);
			
			$this->data['submit'] = makeSubmitButton('Submit', 'submit');
		}
		$this->data['num'] = $num;
        $this->render();
    }
	
	//Third post function checks for errors, if none it updates the menu then redirects to the homepage, if errors are found then it redirects to the edit form.
    function post5($num) {
        // Handle edit form
		$edited = $_POST;
		$temp = $this->menu->get($num);
		$edited['code'] = $num;
		$edited['picture'] = $temp->picture;
		$this->session->unset_userdata('item');
		$this->session->set_userdata('item', $edited);
		$item = $this->session->userdata('item');
		if($this->errors2($item)){			
			$this->edit5($num);
		}else{
			$temp->name = $edited['name'];
			$temp->description = $edited['description'];
			$temp->price = $edited['price'];
			$temp->category = $edited['category'];
			$this->menu->update($temp);
			redirect('/');
		}
    }
	
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */