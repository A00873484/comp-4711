<?php

/**
 * Data access wrapper for "menu" table.
 *
 */
class Users extends MY_Model {
    // constructor
    function __construct() {
        parent::__construct('users','id');
    }
}
