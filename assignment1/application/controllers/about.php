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
        $this->data['description'] = "<h1 style='color:red;text-transform:uppercase;'>Remember to change this!!!</h1><p>Design Decisions</p><br/>
To style the layout of our website we have used Foundation. We used it for the page grid. We chose to use a clean design with Javascript to give it a little flare. We used the minimalistic design decision when making our buttons having only 3 buttons on the menu bar and using the attraction images as buttons as well allowing us to maintain a clean look.
<br/><br/>
As the site moves along we want to fill out the specific attraction pages with more detail along with more pictures of that attraction. We also hope to incorporate the site with media websites like facebook

Data Structure
For our data structure the data common to all attractions will be:

ID
Name of attraction
Contact info
Category it belongs to
Location
Teaser and full description
Price range
Link to the category page
Link to the specific attraction
Teaser image
Assortment of other images for a specific attraction
Links to sites related to the specific attraction (for surfing this would mean a link to a site that offers surfing equipment rentals)
data common amongst play attractions

Age
Level of appropriate fitness required for the activity
The level of intensity of the activity
data common amongst cuisine attractions

Food type (ie. fish and chips, burger joint, etc)
Menu information
Restaurant style (casual, business, etc)
data common amongst accommodation attractions

Cleanliness level
Whats near the hotel
Unique features (hot spring, arcade, etc)
Templates
We have attempted to keep the side modular enough so that later add-ons in future assignments can be easily implemented. Though the sites templates for a specific attraction look similar at the moment, as more unique data is added they will become much different.";
		$this->data['name'] = "About";
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */