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
        $this->data['pagebody'] = 'admin/edit';
        $this->data['code'] = $code;
        $this->render();
    }

    function post3() {
        // Handle edit form
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */