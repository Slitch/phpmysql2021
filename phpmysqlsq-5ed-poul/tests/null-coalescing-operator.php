<?php

//Check the name value from URL argument
$name = $_POST['name'] ?? NULL;

// //Check the email value from URL argument
// $email = $_GET['email'] ?? 'No email address is found.';

// //Check phone value in $_POST array and in $_GET array
// $phone = $_POST['phone'] ?? $_GET['phone'] ?? 'No phone number found.';

// //Print the output of the three variables
// echo "<b> Name: </b>$name<br /><b> Email: </b>$email<br /><b> Phone: </b>$phone";
echo "<b> Name: </b>$name<br/>";

?>