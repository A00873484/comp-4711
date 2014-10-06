<?php

/**
 * Order handler
 * 
 * Implement the different order handling usecases.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Order extends Application {

    function __construct() {
        parent::__construct();
    }

    // start a new order
    function neworder() {
        $dateTime = new DateTime();
        $mysqldate = $dateTime->format("Y-m-d H:i:s");
        $order_num = $this->orders->highest() + 1;
        $this->orders->add(array('num' => $order_num, 'date' => $mysqldate, 'status' => 'a', 'total' => 0));
        redirect('/order/display_menu/' . $order_num);   
    }

    // add to an order
    function display_menu($order_num = null) {
        if ($order_num == null)
            redirect('/order/neworder');

        $this->data['pagebody'] = 'show_menu';
        $this->data['order_num'] = $order_num;

        // Make the columns
        $this->data['meals'] = $this->make_column('m');
        $this->data['drinks'] = $this->make_column('d');
        $this->data['sweets'] = $this->make_column('s');

        $this->render();
    }

    // make a menu ordering column
    function make_column($category) {
        $items = $this->menu->some('category', $category);
        return $items;
    }

    // add an item to an order
    function add($order_num, $item) {
        $this->orders->add_item($order_num, $item);
        redirect('/order/display_menu/' . $order_num);
    }

    // checkout
    function checkout($order_num) {
		
		$this->data['title'] = 'Checking Out';
        $this->data['pagebody'] = 'show_order';
        $this->data['order_num'] = $order_num;

        $total = $this->orders->total($order_num);
        $items = $this->orderitems->some('order', $order_num);
		if($items != null)
		foreach($items as $item){
			$hold[] = array(
				'quantity' => $item->quantity,
				'code' => $this->menu->get($item->item)->name
			);
		}
		else{
			$hold[] = array(
				'quantity' => "No items are selected.",
				'code' => ""
			);
		}
		
        $this->data['order_num'] = $order_num;
        $this->data['total'] = $total;
        $this->data['items'] = $hold;		
		
        $this->render();
    }

    // proceed with checkout
    function commit($order_num) {
        $item = $this->orders->get($order_num);
        $item->status = 'c';
        $this->orders->update($item);
        redirect('/');
    }

    // cancel the order
    function cancel($order_num) {
        redirect('/');
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */