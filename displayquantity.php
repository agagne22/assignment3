<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display purchases</title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<div class = 'container'>
<table cellpadding = '10'>
<tr>
	<th>Customer's first name</th>
	<br>
	<th> product description </th>
	<th> quantity </th>
</tr>
<!-- display all products purchased and who purchased given a minimum quantity of purchase -->
<?php

	$minquant = $_POST["minquantity"];

	$queryquantity = 'SELECT Customer.firstname as first, Product.description as descrip , Purchase.quantity as quant FROM Customer, Product , Purchase WHERE Customer.customerid = Purchase.customerid AND Product.productid = Purchase.productid AND Purchase.quantity > ' . $minquant ;
	$resultquantity = mysqli_query($connection,$queryquantity);
	if(!$resultquantity){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($resultquantity)) {
		echo '<tr>';
		echo '<td>' . $row["first"] . '</td>';
		echo '<td>' . $row["descrip"] . '</td>';
		echo '<td>' . $row["quant"] . '</td>';
		echo '</tr>';
	}
	mysqli_free_result($resultquantity);
	mysqli_close($connection);
?>
</table>
</body>
</html>
