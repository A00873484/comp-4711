<?php

/**
 * Data access wrapper for "menu" table.
 *
 * @author jim
 */
class Users extends MY_Model {
    // constructor
    function __construct() {
        parent::__construct('users','id');
    }
}
