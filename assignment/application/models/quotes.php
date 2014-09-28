<?php


class Quotes extends CI_Model {
	
    var $data = array(
        array('id' => '1', 'name' => 'Hiking', 'image' => 'mount-fuji-sunset2.jpg', 'where'=>'/explore/play/1',
            'description' => 'Hike the world famous mountain.', 'catagory' => 'play'),
        array('id' => '2', 'name' => 'walking', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/play/2',
            'description' => 'look at pretty flowers', 'catagory' => 'play'),
        array('id' => '3', 'name' => 'strolling', 'image' => '15338797172_b072f6eeb5_o.jpg', 'where'=>'/explore/play/3',
            'description' => 'look a pretty scenery', 'catagory' => 'play'),
        array('id' => '4', 'name' => 'pretend to be japanese', 'image' => '15367895181_b88f912991_k.jpg', 'where'=>'/explore/play/4',
            'description' => 'it\'s fun', 'catagory' => 'play'),
        array('id' => '5', 'name' => 'listen', 'image' => '15168253195_7k0bf2b522_o.jpg', 'where'=>'/explore/play/5',
            'description' => 'to people speak japanese.', 'catagory' => 'play'),
        array('id' => '6', 'name' => 'dasabi', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/eat/1',
            'description' => 'Tasty food', 'catagory' => 'eat'),
        array('id' => '7', 'name' => 'raman place', 'image' => '8069223304_a8d4351430_o.jpg', 'where'=>'/explore/eat/2',
            'description' => 'has good raman', 'catagory' => 'eat'),
        array('id' => '8', 'name' => 'sushi place', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/eat/3',
            'description' => 'has good sushi', 'catagory' => 'eat'),
        array('id' => '9', 'name' => 'teriaki place ', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/eat/4',
            'description' => 'tasty teriaki chicken', 'catagory' => 'eat'),
        array('id' => '10', 'name' => 'dasabo', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/eat/5',
            'description' => 'has good food', 'catagory' => 'eat'),
        array('id' => '11', 'name' => 'hotel No 1', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/sleep',
            'description' => 'best hotel ever.', 'catagory' => 'sleep'),
        array('id' => '12', 'name' => 'motel No 2', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/sleep',
            'description' => 'a motel', 'catagory' => 'sleep'),
        array('id' => '13', 'name' => 'bed and breakfast', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/sleep',
            'description' => 'bed and breakfast japanesey style.', 'catagory' => 'sleep'),
        array('id' => '14', 'name' => 'hotel No 2', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/sleep',
            'description' => 'less expensive then hotel No 1', 'catagory' => 'sleep'),
        array('id' => '15', 'name' => 'tokashiki ave', 'image' => '15153292330_ba71b36d85_o.jpg', 'where'=>'/explore/sleep',
            'description' => 'its free.', 'catagory' => 'sleep'),
		array('id' => '16', 'name' => 'About', 'image' => '15153292330_ba71b36d85_o', 'where' => '/about',
			'description' => 'Japan is in asia', 'catagory' => 'about')
    );
	
	
	
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
