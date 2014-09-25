
<?php
// put your code here
?>
<form action="/add_contact/post" method="post">
    <label for="id">Initials</label>
    <input type="text" name="id" id="id" value="{id}"/><br>
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname" value="{surname}"/><br>
    <label for="firstname">First name</label>
    <input type="text" name="firstname" id="firstname" value="{firstname}"/><br>
    <label for="phone">Telephone</label>
    <input type="text" name="phone" id="phone" value="{phone}"/><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{email}"/><br>

    <button type="submit">OK</button>
</form>
