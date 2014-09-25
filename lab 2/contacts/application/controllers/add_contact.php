<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/welcome.php
 *
 * Entry page to the webapp.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
class Add_contact extends Application {

    function index() {
        $this->data['pagebody'] = "add_form";
        $new_contact = (array) $this->contacts->create();
        $this->data = array_merge($this->data, $new_contact);
        $this->render(); // Render the view
    }

    function post() {
        $new_id = $_POST['id'];   // Get user input: id
        $email = $_POST['email']; // Get user input: email
        $phone = $_POST['phone']; // Get user input: phone

        if($this->contacts->get($new_id) != null) // If a contact with the same ID is found
            $this->data['errors'][] = 'Contact ID already used.'; // Add an error to show to the user
        if(empty($_POST['id'])) // If user ID is empty
            $this->data['errors'][] = 'You need an ID for this contact'; // Add an error to show to the user

        // Check if the email matches our regex for email
        if (!preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $email)) {
            $this->data['errors'][] = "Email invalid"; // Add an error to show to the user
        }

         // Check if the phone matches our regex for phone
        if (!preg_match('/^\(?[0-9]{3}\)?|[0-9]{3}[-. ]? [0-9]{3}[-. ]?[0-9]{4}$/', $phone)) { 
            $this->data['errors'][] =  "Phone invalid"; // Add an error to show to the user
        }

        if(count($this->data['errors']) > 0) { // If there are any errors to be shown to the user
            $this->index();
        } else {
            $this->contacts->add($_POST); // Otherwise, add contact
            redirect('/'); // Redirect to homepage
        }
    }
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */