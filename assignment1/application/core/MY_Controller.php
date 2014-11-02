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
		$this->parser->parse('_template', $this->data);
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */