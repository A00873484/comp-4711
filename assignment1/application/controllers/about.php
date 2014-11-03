<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class About extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'aboutview';
		$this->data['fillhead']  = 'topFiller';
		$this->data['header'] = 'header';
		$this->data['footer'] = 'footer';
        $source = $this->attractions->get(1);
        htmlspecialchars($source->image, ENT_QUOTES, 'UTF-8');
		$this->data['image'] = $source->image;
        $this->data['description'] = 
        "<p>Design Decisions</p><br>
To style the layout of our website we have used Foundation. We used it for the page grid. We chose to use a clean design with Javascript to give it a little flare. We used the minimalistic design decision when making our buttons having only 3 buttons on the menu bar and using the attraction images as buttons as well allowing us to maintain a clean look.
<br>
Going forward, we will have specific attraction pages with more detailed description (and images) of that attraction in addition to social media integration.

Data Structure<br>
For our data structure the data common to all attractions will be:<br>
<br>
<ul>
    <li>ID</li>
    <li>Attraction name</li>
    <li>Attraction category</li>
    <li>Attraction description</li>
    <li>Link to the category page</li>
    <li>Link to the specific attraction</li>
    <li>Slideshow for the specific attraction</li>
</ul>";
		$this->data['name'] = "About";
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */