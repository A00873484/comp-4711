<?php

class Attractions extends MY_Model {
	
    /*var $data = array(
        array('id' => '1', 'name' => 'Hiking', 'image' => 'mount-fuji-sunset2.jpg', 'where'=>'/select/select/1',
            'description' => 'Hike the world famous mountain.', 'category' => 'play', 'featured' => 'Y'),
        array('id' => '3', 'name' => 'strolling', 'image' => '15338797172_b072f6eeb5_o.jpg', 'where'=>'/select/select/3',
            'description' => 'look at pretty scenery', 'category' => 'play', 'featured' => 'Y'),
        array('id' => '4', 'name' => 'Experience the Culture', 'image' => '15367895181_b88f912991_k.jpg', 'where'=>'/select/select/4',
            'description' => 'it\'s fun', 'category' => 'play', 'featured' => 'N'),
        array('id' => '5', 'name' => 'Join the city Life', 'image' => '15153987320_de7c939055_o.jpg', 'where'=>'/select/select/5',
            'description' => 'to people speak japanese.', 'category' => 'play', 'featured' => 'N'),
        array('id' => '6', 'name' => 'dasabi', 'image' => '8072307316_cd73fe4534_o.jpg', 'where'=>'/select/select/6',
            'description' => 'Tasty food', 'category' => 'eat', 'featured' => 'N'),
        array('id' => '7', 'name' => 'raman place', 'image' => '8069223304_a8d4351430_o.jpg', 'where'=>'/select/select/7',
            'description' => 'has good raman', 'category' => 'eat', 'featured' => 'N'),
        array('id' => '8', 'name' => 'sushi place', 'image' => '8072308492_f1f6c53484_o.jpg', 'where'=>'/select/select/8',
            'description' => 'has good sushi', 'category' => 'eat', 'featured' => 'Y'),
        array('id' => '9', 'name' => 'teriaki place ', 'image' => '8072314245_43d8c62a8f_o.jpg', 'where'=>'/select/select/9',
            'description' => 'tasty teriaki chicken', 'category' => 'eat', 'featured' => 'N'),
        array('id' => '10', 'name' => 'dasabo', 'image' => '15364398232_5dcf3e502f_k.jpg', 'where'=>'/select/select/10',
            'description' => 'has good food', 'category' => 'eat', 'featured' => 'N'),
        array('id' => '11', 'name' => 'hotel No 1', 'image' => '15368957195_9c0bf2b586_o.jpg', 'where'=>'/select/select/11',
            'description' => 'best hotel ever.', 'category' => 'sleep', 'featured' => 'N'),
        array('id' => '12', 'name' => 'motel No 2', 'image' => '15041201036_270b5447d9_o.jpg', 'where'=>'/select/select/12',
            'description' => 'a motel', 'category' => 'sleep', 'featured' => 'Y'),
        array('id' => '13', 'name' => 'bed and breakfast', 'image' => '15338797172_b072f6eeb5_o.jpg', 'where'=>'/select/select/13',
            'description' => 'bed and breakfast japanesey style.', 'category' => 'sleep', 'featured' => 'N'),
        array('id' => '14', 'name' => 'hotel No 2', 'image' => '15278354632_ea0408bee3_o.jpg', 'where'=>'/select/select/14',
            'description' => 'less expensive then hotel No 1', 'category' => 'sleep', 'featured' => 'N'),
        array('id' => '15', 'name' => 'tokashiki ave', 'image' => '15260772855_8078f744fa_o.jpg', 'where'=>'/select/select/15',
            'description' => 'its free.', 'category' => 'sleep', 'featured' => 'N')
    );*/
	
    // Constructor
    function __construct() {
        parent::__construct('attractions','id');
    }

    // retrieve one activity
    /*public function getData($id) {
        // iterate over the data until we find the one we want
        foreach ($this->attraction as $record)
            if ($record['id'] == $id)
                return $record;
        return null;
    }
	
	public function all(){
		return $this->attraction;
	}*/

}
