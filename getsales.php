<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display total sales</title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<div class = 'container'>
<table cellpadding ='10'>
<tr>
    	<th> Product ID</th>
        <th> Description </th>
	<th> Total Number Purchased </th>
	<th> Total Sales </th>
</tr>
<!-- display the sales of a specific product -->
<?php

	$prodsalesid = $_POST["selprodid"];
     	$querysales = 'SELECT Purchase.productid as "prodid", description, sum(Purchase.quantity) as "totalpurchased", costperitem*(sum(Purchase.quantity)) as "totalsales" FROM Purchase, Product WHERE Purchase.productid = ' . $prodsalesid;
	$resultsales = mysqli_query($connection,$querysales);
        if(!$resultsales){
                die("database query failed.");
        }
	while($row=mysqli_fetch_assoc($resultsales)) {
                echo '<tr>';
                echo '<td>' . $row["prodid"] . '</td>';
                echo '<td>' . $row["description"] . '</td>';
		echo '<td>' . $row["totalpurchased"] . '</td>';
		echo '<td>' . $row["totalsales"] . '</td>';
                echo '</tr>';
        }
	mysqli_free_result($resultsales);
        mysqli_close($connection);
?>
</table>
</body>
</html>
