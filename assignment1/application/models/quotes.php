<?php


class Quotes extends CI_Model {
	
    var $data = array(
        array('id' => '1', 'name' => 'Hiking', 'image' => 'mountain.jpg', 'where'=>'/explore/play/hiking',
            'description' => 'Hike the world famous mountain.', 'catagory' => 'play'),
        array('id' => '2', 'name' => 'walking', 'image' => 'blosssoms.jpg', 'where'=>'/explore/play/walking',
            'description' => 'look at pretty flowers', 'catagory' => 'play'),
        array('id' => '3', 'name' => 'strolling', 'image' => 'scenery.jpg', 'where'=>'/explore/play/strolling',
            'description' => 'look a pretty scenery', 'catagory' => 'play'),
        array('id' => '4', 'name' => 'pretend to be japanese', 'image' => 'pretend.jpg', 'where'=>'/explore/play/pretend',
            'description' => 'it\'s fun', 'catagory' => 'play'),
        array('id' => '5', 'name' => 'listen', 'image' => 'japanese.jpg', 'where'=>'/explore/play/listen',
            'description' => 'to people speak japanese.', 'catagory' => 'play'),
        array('id' => '6', 'name' => 'dasabi', 'image' => 'mountain.jpg', 'where'=>'/explore/eat',
            'description' => 'Tasty food', 'catagory' => 'eat'),
        array('id' => '7', 'name' => 'raman place', 'image' => 'blosssoms.jpg', 'where'=>'/explore/eat',
            'description' => 'has good raman', 'catagory' => 'eat'),
        array('id' => '8', 'name' => 'sushi place', 'image' => 'scenery.jpg', 'where'=>'/explore/eat',
            'description' => 'has good sushi', 'catagory' => 'eat'),
        array('id' => '9', 'name' => 'teriaki place ', 'image' => 'pretend.jpg', 'where'=>'/explore/eat',
            'description' => 'tasty teriaki chicken', 'catagory' => 'eat'),
        array('id' => '10', 'name' => 'dasabo', 'image' => 'japanese.jpg', 'where'=>'/explore/eat',
            'description' => 'has good food', 'catagory' => 'eat'),
        array('id' => '11', 'name' => 'hotel No 1', 'image' => 'mountain.jpg', 'where'=>'/explore/sleep',
            'description' => 'best hotel ever.', 'catagory' => 'sleep'),
        array('id' => '12', 'name' => 'motel No 2', 'image' => 'blosssoms.jpg', 'where'=>'/explore/sleep',
            'description' => 'a motel', 'catagory' => 'sleep'),
        array('id' => '13', 'name' => 'bed and breakfast', 'image' => 'scenery.jpg', 'where'=>'/explore/sleep',
            'description' => 'bed and breakfast japanesey style.', 'catagory' => 'sleep'),
        array('id' => '14', 'name' => 'hotel No 2', 'image' => 'pretend.jpg', 'where'=>'/explore/sleep',
            'description' => 'less expensive then hotel No 1', 'catagory' => 'sleep'),
        array('id' => '15', 'name' => 'tokashiki ave', 'image' => 'japanese.jpg', 'where'=>'/explore/sleep',
            'description' => 'its free.', 'catagory' => 'sleep')
		array('id' => '16', 'name' => 'About', 'image' => 'mountain', 'where' => '/about',
			'description' => 'Japan is in asia', 'catagory' => 'about')
    );
	
	var $data = array(play, eat, sleep, about);
	
    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single quote
    public function getData($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }

    // retrieve the first quote
    public function first() {
        return $this->data[0];
    }

    // retrieve the last quote
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}
