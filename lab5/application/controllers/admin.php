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
        $this->data['title'] = 'Jim\'s Joint! - Administration';
        $this->data['pagebody'] = 'admin/show_menu.php';

        // Get all the completed orders
        $menuitems = $this->menu->all();

        // Build a multi-dimensional array for reporting
        $items = array();
        foreach ($menuitems as $item) {
            $this1 = array(
                'name' => $item->name,
                'description' => $item->description,
                'price' => $item->price,
                'picture' => $item->picture
            );
            $items[] = $this1;
        }

        // and pass these on to the view
        $this->data['items'] = $items;
        
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */