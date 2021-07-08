<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Predefined Variables</title>
</head>
<body>
<?php
# Script 1.5 - predefined.php
# Creates June 13, 2021
# Creatd by Poul Lynge Larsen
# This script.

// Create a shorthand version of the variable name:
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

// Print the same name of this script:
echo "<p>You are running the file:<br><strong>$file</strong>.</p>\n";

// Print the user's information:
echo "<p>You are viewing this page using:<br><strong>$user</strong></p>\n";

// Print the server's information:
echo "<p>This server is running:<br><strong>$server</strong></p>\n";

# On a mac it should print somthing like:
/*
You are running the file:
/opt/lampp/htdocs/phpmysqlvqp-5e-book-prog/phpmysqlsq-5ed-poul/ch1/predefined.php.

You are viewing this page using:
Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15

This server is running:
Apache/2.4.48 (Unix) OpenSSL/1.1.1k PHP/7.4.20 mod_perl/2.0.11 Perl/v5.32.1
*/


?>

</body>
</html>