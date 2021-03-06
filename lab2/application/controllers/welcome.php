<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/welcome.php
 *
 * Entry page to the webapp.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function index() {
        $this->data['pagebody'] = "homepage";
        $this->data['contacts'] = $this->contacts->getAll_array(); // Set the contacts to be rendered on the page
        $this->render(); // Render the view
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */