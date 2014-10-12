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
    }

    function display() {
        $this->data['title'] = 'Jim\'s Joint Administration!';
        $this->data['pagebody'] = 'admin/show_menu';

        // Get all the completed orders
        $menuitems = $this->menu->all();

        // Build a multi-dimensional array for reporting
        $items = array();
        foreach ($menuitems as $item) {
            $this1 = array(
                'code' => $item->code,
                'name' => $item->name,
                'description' => $item->description,
                'picture' => $item->picture
            );
            $items[] = $this1;
        }

        // and pass these on to the view
        $this->data['items'] = $items;
        
        $this->render();
    }

    function list2() {
        $this->data['title'] = 'Jim\'s Joint Administration (view 2)!';
        $this->data['pagebody'] = 'admin/listitem';

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

    function edit3($code) {
        $this->data['title'] = 'Jim\'s Joint Maintenance!';
        $this->data['pagebody'] = 'admin/edititem';
        $this->data['code'] = $code;
		$temp = $this->menu->some('code', $code)[0];
		$this->data['name'] = $temp->name;
		$this->data['description'] = $temp->description;
		$this->data['price'] = $temp->price;
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
	
	function edit4($code) {
        $this->data['title'] = 'Jim\'s Joint Maintenance!';
        $this->data['pagebody'] = 'admin/edititem';
        $this->data['code'] = $code;
		$temp = $this->menu->some('code', $code)[0];
		$this->data['name'] = $temp->name;
		$this->data['description'] = $temp->description;
		$this->data['price'] = $temp->price;
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
	
    function post4() {
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
	
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */