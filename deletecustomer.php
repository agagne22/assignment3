<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete customer</title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<!-- user decides which customer to delete -->
<?php
$custidel= $_POST["delcustid"];
echo '<br>';
$querydeletecust= 'DELETE FROM Customer  WHERE customerid = ' . $custidel;
echo '<br>';
mysqli_query($connection,$querydeletecust);
echo 'this customer has successfully been deleted';
mysqli_close($connection);
?>
</body>
</html>
