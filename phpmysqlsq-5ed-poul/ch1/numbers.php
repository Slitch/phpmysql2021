<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
<body>
<?php 
# PHP and MySQL for Dynamics Web Site 5th Edition
# ISB-13: 978-0-13-430184-6
# Date Create: June 14, 2021
# Created by: Poul Lynge Larsen
# Script 1.8 - numbers.php

// Variables:
$quantity = 30; // Buying 30 widgets
$item_price = 119.96;
$taxrate = .05; // 5% sales tax.


$total = $quantity * $item_price;
$total_tax = $total * $taxrate;
$total_price_w_tax = $total + $total_tax; // Calculate and add the tax.

// function number($a, $b){
// 	$a = number_format($b, 2);
// };

// format the total:
$item_price =			number_format($item_price, 2);
$total_form = 			number_format($total, 2);
$total_tax = 			number_format($total_tax, 2);
$total_price_w_tax = 	number_format($total_price_w_tax, 2);

// Print the result:
echo '<p>You are purchasing <strong>' . $quantity . '</strong> widget(s) at a cost of <strong>$' . $item_price . '</strong> each. With tax, the total comes to <strong>$' . $total_price_w_tax . '</strong>.</p>';

 echo "
 <table>
 	<tr>
 		<th>Product</th>
 		<th>Amount</th>
 	</tr>
 	<tr>
 		<td>Price per product.</td>
 		<td>$item_price</td>
 	</tr>
 	<tr>
 		<td>Number of products.</td>
 		<td>$quantity</td>
 	</tr>
 	<tr>
 		<td>Total price exclusding tax.</td>
 		<td>$total_form</td>
 	</tr>
 	<tr>
 		<td>Total Tax.</td>
 		<td>$total_tax</td>
 	</tr>
 	<tr>
 		<td>Total price with Tax.</td>
 		<td>$total_price_w_tax</td>
 	</tr>
 </table>
 ";

$total += ($total * $taxrate);
echo "<p>$total</p>";

 ?>
</body>
</html>