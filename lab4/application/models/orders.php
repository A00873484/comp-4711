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
        $items = $this->orders->get($num);

        if($items == null) {
            return 0;
        }

        foreach($items as $item) {
            $quantity = $this->orderitems->get($num, $item)->quantity;
            $price = $this->menu->get($item)->price;
            $sum += $quantity * $price;
        }
        return $sum;
    }

    // retrieve the details for an order
    function details($num) {
        
    }

    // cancel an order
    function flush($num) {
        
    }

    // validate an order
    // it must have at least one item from each category
    function validate($num) {
        return false;
    }

}
