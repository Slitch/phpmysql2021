<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Escape php</title>
</head>
<body>
<!-- How to Escape single or double quotation marks -->
<?php 
// What not to do
// echo "She said "How are you?"";
// echo 'I'm just ducky.';
/*
Parse error: syntax error, unexpected 'How' (T_STRING), expecting ';' or ',' in /opt/lampp/htdocs/phpmysqlvqp-5e-book-prog/phpmysqlsq-5ed-poul/ch1/escape.php on line 11
*/

//Solution 1
// echo 'She said "How are you?"';
// echo '<br>';
// echo "I'm just ducky.";

// Solution 2
echo "She said \"How are you?\"";
echo '<br>';
echo 'I\'m just ducky.';
?>
</body>
</html>