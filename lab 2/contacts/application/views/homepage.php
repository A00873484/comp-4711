<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/homepage.php
 *
 * Present the welcome page body.
 * Yes, I probably should have used CSS, but a table is so easy.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
?>
<table cols="" border="0">
    <tr>
        <th>Initials</th>
        <th>Name</th>
        <th>Email address</th>
    </tr>
    {contacts}
    <tr>
        <td>{id}</td>
        <td>{firstname} {surname}</td>
        <td>{email}</td>
    </tr>
    {/contacts}
</table>