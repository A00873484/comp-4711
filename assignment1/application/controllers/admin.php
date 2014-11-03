<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Admin extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'admin';
		$this->data['fillhead']  = 'topFiller';
		$this->data['header'] = 'header';
		$this->data['footer'] = 'footer';
        $source = $this->attractions->all();
		$options = "";
        foreach ($source as $record) {
        	htmlspecialchars($record->id, ENT_QUOTES, 'UTF-8');
        	htmlspecialchars($record->name, ENT_QUOTES, 'UTF-8');
        	htmlspecialchars($record->category, ENT_QUOTES, 'UTF-8');
        	htmlspecialchars($record->image, ENT_QUOTES, 'UTF-8');
        	$options .= $this->parser->parse('admin2', $record, true);
        }
        $this->data['fill'] = $options;
        $this->render();
    }
	
	function edit($num) {
		$this->load->helper('formfields');
        $this->data['pagebody'] = 'edit';
		$this->data['fillhead']  = 'topFiller';
		$this->data['header'] = 'header';
		$this->data['footer'] = 'footer';
		$attraction = $this->session->userdata('attraction');
		if($attraction){	
			$this->data['id'] = makeTextField('Id', 'id', $num, $explain = "The Attraction ID (can't be changed)", $maxlen = 10, $size = 25, $disabled = true);
			$this->data['name'] = makeTextField('Name', 'name', $attraction['name'], 'Short name for this Attraction, suited to customer ordering');
			$this->data['description'] = makeTextArea('Description', 'description', $attraction['description'], "The description of the attraction, anything is valid");
			
			$options[0] = 'play';
			$options[1] = 'eat';
			$options[2] = 'sleep';
			$this->data['category'] = makeComboField('Category', 'category', $attraction['category'], $options, $explain = "Categorys are Sweet, Meat, and Drink. Select Accordingly", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['image'] = showImage('Image1', $attraction['image'], $width = 120, $height = 80);
			$this->data['image2'] = showImage('Image2', $attraction['image2'], $width = 120, $height = 80);
			$this->data['image3'] = showImage('Image3', $attraction['image3'], $width = 120, $height = 80);
			$this->data['submit'] = makeSubmitButton('Submit', 'submit');
		}else{
			$temp = $this->attractions->get($num);
			htmlspecialchars($temp->id, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->name, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->description, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->category, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->image, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->image2, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->image2, ENT_QUOTES, 'UTF-8');
			$this->data['id'] = makeTextField('Id', 'id', $temp->id, $explain = "The Attraction ID (can't be changed)", $maxlen = 10, $size = 25, $disabled = true);	
			$this->data['name'] = makeTextField('Name', 'name', $temp->name, 'Short name for this attraction, suited to customer ordering');
			$this->data['description'] = makeTextArea('Description', 'description', $temp->description, "The description of the attraction, anything is valid");			
			
			$options['play'] = 'play';
			$options['eat'] = 'eat';
			$options['sleep'] = 'sleep';
			$this->data['category'] = makeComboField('Category', 'category', $temp->category, $options, $explain = "Categorys are Play, Eat, and Sleep. Select Accordingly", $maxlen = 40, $size = 25, $disabled = false);
			$this->data['image'] = showImage('Image1', $temp->image, $width = 120, $height = 80);
			$this->data['image2'] = showImage('Image2', $temp->image2, $width = 120, $height = 80);
			$this->data['image3'] = showImage('Image3', $temp->image3, $width = 120, $height = 80);
			$this->data['submit'] = makeSubmitButton('Submit', 'submit');
		}
		$this->data['num'] = $num;
        $this->render();
    }

    function post($num) {
		$edited = $_POST;
		$temp = $this->attractions->get($num);
		$edited['code'] = $num;
		print_r(empty($_FILES));
		if (!empty($_FILES)) {
			$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '5000';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';
			$config['encrypt_name'] = TRUE;
			$config['remove_spaces'] = TRUE;
		    $this->load->library('upload', $config);
	        if (isset($_FILES['Image1']['name'])) { // Upload the first image
	        	$this->upload->do_upload('Image1');
	            $data = $this->upload->data();
	            print_r($data);
	            echo $data['full_path']; // Full path to the image, needs to be stored in the database
	            echo '<br/>';
	            echo '<br/>';
	            echo '<br/>';
	        }

	        if (isset($_FILES['Image2']['name'])) { // Upload the second image
	        	$this->upload->do_upload('Image2');
	            $data = $this->upload->data();
	            print_r($data);
	            echo $data['full_path']; // Full path to the image, needs to be stored in the database
	            echo '<br/>';
	            echo '<br/>';
	            echo '<br/>';
	        }

	        if (isset($_FILES['Image3']['name'])) { // Upload the third image
	        	$this->upload->do_upload('Image3');
	            $data = $this->upload->data();
	            print_r($data);
	            echo $data['full_path']; // Full path to the image, needs to be stored in the database
	            echo '<br/>';
	            echo '<br/>';
	            echo '<br/>';
	        }
	    }

		$this->session->unset_userdata('item');
		$this->session->set_userdata('item', $edited);
		$item = $this->session->userdata('item');
		if($this->errors($item)){			
			$this->edit($num);
		}else{
			htmlspecialchars($temp->name, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->description, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->category, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->timeChanged, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->image, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->image2, ENT_QUOTES, 'UTF-8');
			htmlspecialchars($temp->image3, ENT_QUOTES, 'UTF-8');
			
			$temp->name = $edited['name'];
			$temp->description = $edited['description'];
			$temp->category = $edited['category'];
			$temp->timeChanged = date("YmdHi");
			$this->attractions->update($temp);
			// redirect('/admin');
		}
    }

    //Takes in the values in the textboxs and determines if the data inside is valid or not,
	//checks for empty textboxes for name and price and checks to see if price has a number in it.
	function errors($items){
		$count = 0;
		if(!$items['name']){
			$this->errors['name'] = 'Your Name textbox is empty';
			$count = 1;
		}
		return $count == 0 ? false : true;
	}

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */