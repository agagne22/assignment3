<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add new customer</title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<!- adding a new customer and getting new custid by adding one to current max customer id -->
<?php

$fnamenew = $_POST["firstname"];
$lnamenew = $_POST["lastname"];
$citynew = $_POST["city"];
$phonenumbernew= $_POST["phonenumber"];
$agentidnew = $_POST["selectagentid"];
echo '<!-- get current max customer id -->';
$querygetmax = 'SELECT MAX(customerid) AS custid FROM Customer';
$resultmax = mysqli_query($connection, $querygetmax);
if(!resultmax){
	die("database max query failed.");
}
$rowmax = mysqli_fetch_assoc($resultmax);
$newcustid = intval($rowmax["custid"]) +1;
$customeridnew = (string)$newcustid;
$querynewinser = 'INSERT INTO Customer VALUES ( ' . $customeridnew . ',"' . $fnamenew . '","' . $lnamenew . '","' . $citynew . '",' . $phonenumbernew . ',' . $agentidnew .  ')' ;
echo '<br>';
if(!mysqli_query($connection,$querynewinser)){
	echo 'error adding the new customer';
}
else{
        echo 'this customer has been added';
}
mysqli_close($connection);
?>
</body>
</html>
