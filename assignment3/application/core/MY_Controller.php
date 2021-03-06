<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
        
        $this->errors = array();
    }

    /**
     * Render this page
     */
    function render() {
        $this->data['header'] = $this->parser->parse($this->data['header'], $this->data, true);
		$this->data['fillhead'] = $this->parser->parse($this->data['fillhead'], $this->data, true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$this->data['footer'] = $this->parser->parse($this->data['footer'], $this->data, true);
        $this->data['errormessages'] = $this->scold();
		$this->parser->parse('_template', $this->data);
    }

    function scold() {
        $result = '';
        if(count($this->errors) < 1) {
            $this->data['alerting'] = '';
        } else {
            $this->data['alerting'] = 'alert alert-error';
            foreach($this->errors as $msg) {
                $result .= $msg . '<br/>';
            }
        }
        return $result;
    }
	function restrict($roleNeeded=null) {
		$userRole = $this->session->userdata('userRole');
		if($roleNeeded != null){
			if(is_array($roleNeeded)){
				if(!in_array($userRole, $roleNeeded)){
					redirect("/");
					exit;
				}
			}else if($userRole != $roleNeeded) {
				redirect("/");
				exit;
			}
		}
	}

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */