<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Purchases</title>
</head>
<body>
<?php
	include 'connecttodb.php';
?>
<!-- either add it as new purchase if this customer has never purchased it update the quantity they purchase quantity previously to include new amount -->
<?php

$customerid = $_POST["selectcustomerid"];
$productid = $_POST["selectproductid"];
$quantity = $_POST["quantity"];


$query6 = 'SELECT * FROM Purchase WHERE productid=' . $productid . ' AND customerid =' . $customerid ;
$query4 = 'INSERT INTO Purchase VALUES ( ' . $customerid . ',' . $productid . ',' . $quantity . ')' ;
$query99 = 'UPDATE Purchase SET quantity = quantity + ' .$quantity . ' WHERE customerid = ' . $customerid . ' AND productid = ' . $productid ;
if(mysqli_num_rows(mysqli_query($connection,$query6))==0){
	mysqli_query($connection,$query4);
	echo 'the purchase has been added!';
}
else{
	 mysqli_query($connection,$query99);
	echo ' the purchase has been added!';
}
mysqli_close($connection);
?>
</body>
</html>

