<?php

/**
 * Data access wrapper for "menu" table.
 *
 * @author jim
 */
class Menu  extends MY_Model{
    // constructor
    function __construct(){
        parent::__construct();
		$xml = simplexml_load_file("data/ferryschedule.xml");
		foreach($xml->children() as $child) {
			$role = $child->attributes();
			foreach($child as $key => $value) {
				$test = $value['code'];
				if($key == "port")
					print_r($test);
				
			}
		}
    }
}
