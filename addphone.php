<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update phone number</title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<!-- use the new phone number added and update the customers phone number to it -->
<?php
session_start();
$phonenumchange= $_POST["addnewnumber"];
echo '<br>';
$querynewnumber = 'UPDATE Customer SET phonenumber= "' . $phonenumchange . '"  WHERE customerid = ' . $_SESSION["custsave"];
echo '<br>';
mysqli_query($connection,$querynewnumber);
echo '<br>';
echo 'the phone number has been succesfully changed!';
mysqli_close($connection);
?>
</body>
</html>
