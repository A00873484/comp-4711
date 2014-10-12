<?php

/**
 * Data access wrapper for "orders" table.
 *
 * @author jim
 */
class Orders extends MY_Model {

    // constructor
    function __construct() {
        parent::__construct('orders', 'num');
    }

    // add an item to an order
    function add_item($num, $code) {
        if($this->orderitems->exists($num, $code)) {
            $existing_item = $this->orderitems->get($num, $code);
            $existing_item->quantity += 1;
            $this->orderitems->update($existing_item);
        } else {
            $new_item = array('order' => $num, 'item' => $code, 'quantity' => 1);
            $this->orderitems->add($new_item);
        }
    }

    // calculate the total for an order
    function total($num) {
        $items = $this->orderitems->some('order', $num);
		
        if($items == null) {
            return 0;
        }
		$sum = 0;
        foreach($items as $item) {
            $quantity = $item->quantity;
            $price = $this->menu->get($item->item)->price;
            $sum += $quantity * $price;
        }
		$amount = $this->orders->get($num);
		$amount->total = $sum;
		$this->orders->update($amount);
		
        return $sum;
    }

    // retrieve the details for an order
    function details($num) {
        
    }

    // cancel an order
    function flush($num) {
        $this->orders->remove(get($num));
    }

    // validate an order
    // it must have at least one item from each category
    function validate($num) {
        return false;
    }

}
