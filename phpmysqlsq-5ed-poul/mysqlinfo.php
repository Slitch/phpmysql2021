<?php

// Create a database connection.
$link = mysqli_connect("localhost", "poul", "Pll-2987Wc27");

// Print the MySQL version.
echo mysqli_get_server_info($link);

// Close the connection.
mysqli_close($link);

?>