<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require APPPATH . '/libraries/rest_controller.php';
 
class Menuitem extends Rest_controller {

    function __construct() {
        parent::__construct();
    }
    
	function index_get() {
        $key = $this->get('code');
        if (!$key) {
            $this->response($this->menu->all(), 200);
        } else {
            $result = $this->menu->get($key);
            if ($result != null)
                $this->response($result, 200);
            else
                $this->response(array('error' => 'item not found!'), 404);
        }
    }

    function index_post() {
        $key = $this->get('code');
        $record = array_merge(array('code' => $key), $_POST);
        $this->menu->add($record);
        $this->response(array('ok'), 200);
    }

    function index_put() {
        $key = $this->get('code');
        $record = array_merge(array('code' => $key), $this->_put_args);
        $this->menu->update($record);
        $this->response(array('ok'), 200);
    }

    function index_delete() {
        $key = $this->get('code');
        $this->menu->delete($key);
        $this->response(array('ok'), 200);
    }
	
}
