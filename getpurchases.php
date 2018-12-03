<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> All products purchased by this customer </title>
</head>
<body>
<?php
	include 'connecttodb.php';
?>
<h1> Here are the products purchased:</h1>
<o1>
<!-- display all products purchased by a specific customer the user selects -->
<?php
	$whichOwner = $_POST["customers"];
	$query = 'SELECT description FROM Product, Purchase WHERE Product.productid= Purchase.productid AND Purchase.customerid = "' .$whichOwner . '"';
	$result=mysqli_query($connection,$query);
	if(!$result) {
		die("database query2 failed.");
	}
	while($row=mysqli_fetch_assoc($result)) {
		echo '<li>';
		echo $row["description"];
	}
	mysqli_free_result($result);
?>
</o1>
<?php
	mysqli_close($connection);
?>
</body>
</html> 
