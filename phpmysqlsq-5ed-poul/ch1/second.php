<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Using Echo</title>
</head>
<body>
<!-- Script 1.3 - second.php -->
<p>This is standard HTML.</p>
<?php
// echo 'This was generated using PHP!;
/*
Parse error: syntax error, unexpected ''This was generated using PHP!' (T_ENCAPSED_AND_WHITESPACE) in /opt/lampp/htdocs/phpmysqlvqp-5e-book-prog/phpmysqlsq-5ed-poul/ch1/second.php on line 11
*/

echo '<p>This was generated using PHP!</p>'."\n";
echo '<p>Hello, <strong>World</strong></p>'."\n";

// printing over multiple PHP lines will generate HTML coder ocer multiple lines.
echo 'This sensentence is 
printed over two lines.'."\n";

?>
</body>
</html>